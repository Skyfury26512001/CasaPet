<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = array('name' => "$request->name", 'contact_message' => "$request->contact_message", 'transaction' => 'as');
        Mail::send('user.contact.email', $data, function ($message) use ($request) {
            $message->to('petscasavn@gmail.com', 'Tutorials Point')->subject("$request->subject");
            $message->from("$request->email", "$request->name");
        });
        return redirect(route('success'));
    }
}
