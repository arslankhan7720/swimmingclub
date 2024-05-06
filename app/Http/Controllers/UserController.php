<?php
// UserController.php

namespace App\Http\Controllers;

use App\Models\CoachSwimmer;
use App\Models\Performance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade if not already imported
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashbaord(){
        // ================ redirec acl ================ //
        $user = Auth::user();
        if( $user->role == 'admin' ){
            return view('dashboard');
        }else if( $user->role == 'parent' ){
            return redirect()->route('parent');
        }else if( $user->role == 'coach' ){
            return redirect()->route('coach');
        }else if($user->role == 'swimmer'){
            $performance = Performance::with(['event','swimmer'])->where('swimmer_id', $user->id)->get();
            return view('users.swimmer.swimmerdashboard', ['performance' => $performance ]);
        }else{
            return view('dashboard');
        }

    }

    public function index()
    {
         // ================ redirec acl ================ //
         $redirect = User::checkRole('admin');
         if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
             return $redirect;
         }

        $users = User::all();
        return view('users.list', ['users' => $users]);
    }

    public function add()
    {
         // ================ redirec acl ================ //
         $redirect = User::checkRole('admin');
         if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
             return $redirect;
         }

        return view('users.add');
    }



    public function store(Request $request)
    {

         // ================ redirec acl ================ //
         $redirect = User::checkRole('admin');
         if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
             return $redirect;
         }

        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8', // Add password validation rules
            'forename' => 'nullable|string',
            'surname' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|string',
            'phone_no' => 'nullable|numeric',
            'postcode' => 'nullable|string',
            'role' => 'nullable|string',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


        $user = User::create($validatedData);
        return redirect()->route('users')->with('success', 'User updated successfully.');
    }




    public function edit($id){

         // ================ redirec acl ================ //
         $redirect = User::checkRole('admin');
         if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
             return $redirect;
         }

        // Retrieve the user from the database
        $user = User::findOrFail($id);

        // Pass the user data to the view for editing
        return view('users.edit', ['user' => $user]); // Return view for editing a user
    }


    public function update(Request $request, $id)
    {


         // ================ redirec acl ================ //
         $redirect = User::checkRole('admin');
         if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
             return $redirect;
         }


        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'forename' => 'nullable|string',
            'surname' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'address' => 'nullable|string',
            'phone_no' => 'nullable|numeric',
            'postcode' => 'nullable|string',
            'role' => 'nullable|string',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user's information
        $user->update($validatedData);

        return redirect()->route('users')->with('success', 'User updated successfully.');


    }

    public function destroy($id)
    {
        // Delete a user from the database
    }


    public function assignswimmer(Request $request){

         // ================ redirec acl ================ //
         $redirect = User::checkRole('admin');
         if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
             return $redirect;
         }


        $swimmers = User::where('role', 'swimmer')->get();
        $coaches = User::where('role', 'coach')->get();
        return view('users.assignswimmer', ['swimmers' => $swimmers, 'coaches' => $coaches]);
    }


    public function assignSwimmerSubmit(Request $request)
    {
         // ================ redirec acl ================ //
         $redirect = User::checkRole('admin');
         if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
             return $redirect;
         }

        // Validate the form data
        $validatedData = $request->validate([
            'coach_id' => 'required|exists:users,id',
            'swimmer_id' => 'required|exists:users,id',
            // Add more validation rules for other form fields if needed
        ]);

        // Remove coach-swimmer pair already exists
        CoachSwimmer::where('swimmer_id', $validatedData['swimmer_id'])->delete();


        // Create a new CoachSwimmer record
        $coachSwimmer = new CoachSwimmer();
        $coachSwimmer->coach_id = $validatedData['coach_id'];
        $coachSwimmer->swimmer_id = $validatedData['swimmer_id'];
        // Add more fields as needed

        // Save the CoachSwimmer record
        $coachSwimmer->save();

        // Optionally, you can redirect the user after successful save
        return redirect()->route('assignswimmer')->with('success', 'Swimmer assigned to coach successfully.');
    }




    // ============================================================================================================ //
    // ============================================================================================================ //
    public function swimmerVerification(Request $request){

        // dd($request->toArray());
        $requestArray = $request->toArray();
        if(!empty($requestArray)){
            $user = User::where('id', $requestArray['id'])->first();
            if($user){
                $user->status = 'verified';
                $user->save();
            }
        }

        $swimmers = User::where('role', 'swimmer')->where('status','unverified')->get();
        return view('users.swimmerVerification', ['swimmers' => $swimmers]);
    }


    // ============================================================================================================ //
    // ============================================================================================================ //
    public function verifyPerformance(Request $request){

        $requestArray = $request->toArray();
        // dd($requestArray );
        if(!empty($requestArray)){
            $perf = Performance::where('id', $requestArray['id'])->first();
            if($perf){

                $perf->status = 'verified';
                $perf->save();
            }
        }


        $performance = Performance::with(['swimmer','event'])->where('status','unverified')->get();
        return view('users.performanceVerification', ['performance' => $performance]);
    }



     // ============================================================================================================ //
    // ============================================================================================================ //
    public function postVerifyPerformance($id){
        $perf = Performance::where('id', $id)->first();
        if($perf){
            $perf->status = 'verified';
            $perf->save();
        }
        // Optionally, you can redirect the user after successful save
        return redirect()->route('verifyPerformance')->with('success', 'Performance verified successfully.');
    }




      // ============================================================================================================ //
    // ============================================================================================================ //
    public function coachVerification(Request $request){

        // dd($request->toArray());
        $requestArray = $request->toArray();
        if(!empty($requestArray)){
            $user = User::where('id', $requestArray['id'])->first();
            if($user){
                $user->status = 'verified';
                $user->save();
            }
        }

        $coaches = User::where('role', 'coach')->where('status','unverified')->get();
        return view('users.coachVerification', ['coaches' => $coaches]);
    }

}
