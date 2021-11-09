<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    Public function contactSubmit( Request $request)
    {
        $data = array(
            'name' => $request->input("name"),
            'email' => $request->input("email"),
            'phone'=> $request->input("phone"),
            'msg' => $request->input("msg")
        );

        Mail::send('emails.contactEmail', $data, function ($mail) use ($request){
            $mail->from('carolinad@intelligence22.com');
            $mail->to("carolina.f.dias@hotmail.com")->subject('Contact Message');
        });

        toastr()->success('Your message has been sent successfully');
        return redirect()->back();
    }
}
