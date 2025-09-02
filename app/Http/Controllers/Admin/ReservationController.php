<?php

namespace App\Http\Controllers\admin;

use App\Models\Reservations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function storereservation(Request $request){
        $full_name = $request->input('full_name');
        $contact_number = $request->input('contact_number');
        $email = $request->input('email');
        $address = $request->input('address');
        $check_in_date = $request->input('check_in_date');
        $room_type = $request->input('room_type');
        $number_of_person = $request->input('number_of_person');
        $special_comments = $request->input('special_comments');
        $check_out_date = $request->input('check_out_date');
        $number_of_room = $request->input('number_of_room');
        $number_of_children = $request->input('number_of_children');

        $data = Reservations::create([
            'full_name'=>$full_name,
            'contact_number'=>$contact_number,
            'email'=>$email,
            'address'=>$address,
            'check_in_date'=>$check_in_date,
            'room_type'=>$room_type,
            'number_of_person'=>$number_of_person,
            'special_comments'=>$special_comments,
            'check_out_date'=>$check_out_date,
            'number_of_room'=>$number_of_room,
            'number_of_children'=>$number_of_children
           
        ]);

        return back();
    }
    public function pendingReservation(){
        $data = Reservations::all()->where('status', "pending");
        return view('admin.reservation.pendingReservation', compact('data'));
    }

    public  function reservationDetails($id){
        $data = Reservations::findOrFail($id);
        return view('admin..reservation.reservationDetails',compact('data'));
    }

    public function updatereservestatus($id){
        $data = Reservations::findOrFail($id);
        $data->status ="completed";
        $data->save();
        return back();
    }

    public function completedReservation(){
        $data = Reservations::all()->where('status', "completed");
        return view('admin.reservation.pendingReservation', compact('data'));
    }

}
