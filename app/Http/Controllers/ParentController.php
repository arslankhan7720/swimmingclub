<?php
// UserController.php

namespace App\Http\Controllers;

use App\Models\CoachSwimmer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade if not already imported
use Illuminate\Support\Facades\Auth;


class ParentController extends Controller
{


    public function index()
    {
        $parent = Auth::user();

        // ================ redirec acl ================ //
        $redirect = User::checkRole('parent');
        if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
            return $redirect;
        }

        $childs = User::where('parent_id', $parent->id)->get();
        return view('parent.list', ['parent' => $parent, 'childs' => $childs]);
    }

    public function add()
    {
        // ================ redirec acl ================ //
        $redirect = User::checkRole('parent');
        if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
            return $redirect;
        }

        return view('users.add');
    }



    public function addchild(Request $request)
    {

        // ================ redirec acl ================ //
        $redirect = User::checkRole('parent');
        if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
            return $redirect;
        }

        // dd($request->toArray());
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8', // Add password validation rules
            'forename' => 'nullable|string',
            'surname' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|string',
            'phone_no' => 'nullable|numeric',
            'postcode' => 'nullable|string'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


        $user = User::create($validatedData);
        $user->parent_id = Auth::user()->id;
        $user->role = 'swimmer';
        $user->status = 'unverified';

        $user->save();

        return redirect()->route('parent')->with('success', 'Child Swimmer added succesfully.');
    }



    public function destroy($id)
    {

        // ================ redirec acl ================ //
        $redirect = User::checkRole('parent');
        if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
            return $redirect;
        }

        // Retrieve the user by ID
        $user = User::findOrFail($id);

        // If user doesn't exist, redirect to another page
        if (!$user || (Auth::user()->id != $user->parent_id) ) {
            return redirect()->route('parent')->with('error', 'Child not found.');
        }


        // Return view to confirm deletion
        return view('parent.confirm-delete', ['user' => $user]);
    }

    public function delete(Request $request, $id)
    {

        // ================ redirec acl ================ //
        $redirect = User::checkRole('parent');
        if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
            return $redirect;
        }

        // Validate the request
        $request->validate([
            'confirmation' => 'required|accepted',
        ]);

        // dd('delte it ');

        // Retrieve the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect back with success message
        return redirect()->route('parent')->with('success', 'User deleted successfully.');
    }

}
