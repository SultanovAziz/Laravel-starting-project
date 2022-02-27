<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function send(Request $request)
    {


        if ($request->method() == 'POST'){
            $this->validate($request,[
                'name' => 'required|min:5|max:255',
                'email' => 'required',
                'message' => 'required|min:10'
            ]);
            $body = "<p><b>Name:</b> {$request->input('name')}</p>";
            $body .= "<p><b>Email:</b> {$request->input('email')}</p>";
            $body .= "<p><b>Message:</b><br>". nl2br($request->input('message'))."</p>";
            Mail::to('aziz89131983189@gmail.com')->send(new TestMail($body));
            session()->flash('success','Письмо было успешно отправленно');
            return redirect()->route('send');
        }


        return view('send');
    }

}
