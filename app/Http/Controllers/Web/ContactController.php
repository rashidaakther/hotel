<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\sendcontactmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendmessage(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
       
        $validData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = [
            'name'=>$name,
            'email'=>$email,
            'message'=>$message,           
        ];
        
        Mail::to("aliakbarctg@yahoo.com")->send(new sendcontactmail("Contact Request from  $name", (object) $data));

        return redirect()->back()->with('success', 'Message has been successfully submitted');
    }
}
