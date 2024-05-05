<?php
// UserController.php

namespace App\Http\Controllers;

use App\Models\CoachSwimmer;
use App\Models\Event;
use App\Models\Performance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade if not already imported
use Illuminate\Support\Facades\Auth;


class CoachController extends Controller
{
    public function index()
    {

         // ================ redirec acl ================ //
         $redirect = User::checkRole('coach');
         if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
             return $redirect;
         }

        $coach = Auth::user();
        $coach_swimmers = CoachSwimmer::with('swimmer')->where('coach_id', $coach->id)->get();
        $events = Event::where('added_by', $coach->id)->get();
        return view('coach.list', ['coach' => $coach, 'coach_swimmers' => $coach_swimmers, 'events' => $events]);
    }




    // ========================================================================================================= //
    // ========================================================================================================= //
    public function performance(Request $request)
    {
          // ================ redirec acl ================ //
          $redirect = User::checkRole('coach');
          if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
              return $redirect;
          }

        $coach = Auth::user();
        $swimmers = CoachSwimmer::with('swimmer')->where('coach_id', $coach->id)->get();
        $events = Event::where('added_by', $coach->id)->get();
        return view('coach.performance', ['coach' => $coach, 'swimmers' => $swimmers, 'events' => $events]);
    }


    // ========================================================================================================= //
    // ========================================================================================================= //
    public function performanceDetail($id)
    {

          // ================ redirec acl ================ //
          $redirect = User::checkRole('coach');
          if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
              return $redirect;
          }

        $coach = Auth::user();

        $performance = Performance::with(['event','swimmer'])->where('swimmer_id', $id)->get();
        // dd( $performance );
        return view('coach.performanceDetail', ['coach' => $coach, 'performance' => $performance]);
    }



    // ========================================================================================================= //
    // ========================================================================================================= //
    public function addPerformance(Request $request)
    {
          // ================ redirec acl ================ //
          $redirect = User::checkRole('coach');
          if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
              return $redirect;
          }


        // dd( $request->toArray() );
        $validatedData = $request->validate([
            'swimmer_id' => 'required|integer|exists:users,id',
            'event_id' => 'required|integer|exists:events,id',
            'p_date' => 'required|date',
            'time' => 'required|date_format:H:i'
        ]);

        // Handle file upload if an image is provided
        if ($request->hasFile('report')) {
            // $imagePath = $request->file('image')->store('events');
            $imageName = time().'.'.$request->report->extension();
            $request->report->move(public_path('images'), $imageName);
            $validatedData['report'] = 'images/'.$imageName;
        }

        // Create a new event record
        $performance = Performance::create($validatedData);
        $performance->status = 'unverified';
        $performance->save();
        // Redirect back or to a success page
        return redirect()->route('coach')->with('success', 'Performance added successfully.');
    }




    // ========================================================================================================= //
    // ========================================================================================================= //
    public function addevent(Request $request)
    {
        // ================ redirec acl ================ //
        $redirect = User::checkRole('coach');
        if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
            return $redirect;
        }

        $coach = Auth::user();
        return view('coach.addevent', ['coach' => $coach]);
    }



    // ========================================================================================================= //
    // ========================================================================================================= //
    public function addNewEvent(Request $request)
    {

          // ================ redirec acl ================ //
          $redirect = User::checkRole('coach');
          if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
              return $redirect;
          }


        // dd( $request->toArray() );
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'event_date' => 'required|date',
            'image' => 'nullable|image|max:2048', // Assuming image file validation
        ]);

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('events');
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = 'images/'.$imageName;
        }
        // Create a new event record
        $event = Event::create($validatedData);
        $event->added_by = Auth::user()->id;
        $event->save();
        // Redirect back or to a success page
        return redirect()->route('coach')->with('success', 'Event created successfully.');
    }




    // ========================================================================================================= //
    // ========================================================================================================= //
    public function removeEvent($id)
    {

          // ================ redirec acl ================ //
          $redirect = User::checkRole('coach');
          if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
              return $redirect;
          }


        // Retrieve the user by ID
        $event = Event::findOrFail($id);

        // If user doesn't exist, redirect to another page
        if (!$event || (Auth::user()->id != $event->added_by) ) {
            return redirect()->route('coach')->with('error', 'Event not found.');
        }


        // Return view to confirm deletion
        return view('coach.confirm-event-delete', ['event' => $event]);
    }



    // ========================================================================================================= //
    // ========================================================================================================= //
    public function deleteEvent(Request $request, $id)
    {

          // ================ redirec acl ================ //
          $redirect = User::checkRole('coach');
          if ($redirect instanceof \Illuminate\Http\RedirectResponse) {
              return $redirect;
          }


        // Validate the request
        $request->validate([
            'confirmation' => 'required|accepted',
        ]);

        // dd('delte it ');

        // Retrieve the user by ID
        $event = Event::findOrFail($id);

        // Delete the user
        $event->delete();

        // Redirect back with success message
        return redirect()->route('coach')->with('success', 'Event deleted successfully.');
    }



}
