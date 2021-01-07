<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
       if($request->method() == 'POST'){
           $body = "<p><b>Name:</b> { $request->input('name')}</p>";
           $body .= "<p><b>Email:</b>{ $request->input('email')}</p>";
           $body .= "<p><b>Message:</b>{ $request->input('text')}</p>";

           Mail::to('Pargev90@gmail.com')->send(new TestMail($body));
           $request->session()->flash('success','SENDED!');
           return redirect('/send');
       } 
      return view('send');
    }
}
