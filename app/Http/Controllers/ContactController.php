<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }

    Public function contactSubmit( Request $request){
//        dd($request->input("name"));
//        $name = $request->input("name");
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required|max:255'
        ]);
        $data = array(
            'name' => $request->input("name"),
            'email' => $request->input("email"),
            'phone'=> $request->input('phone'),
            'message'=> $request->input("message")
        );
        Mail::send('emails.contactmail', $data, function ($mail) use ($request){
            $mail->from(env('MAIL_FROM_ADDRESS', 'The Freethinking Group'));
            $mail->to($request->input("email"))->subject('Contact Message');
        });
        return 'Message has been sent successfully';
    }
}
