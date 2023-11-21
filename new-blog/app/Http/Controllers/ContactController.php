<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Message;

class ContactController extends Controller
{
    
    public function submit(ContactRequest $request){
        //dd($request);
        $message = new Message();

        $message ->name = $request->input('name');
        $message ->email = $request->input('email');
        $message ->subject = $request->input('subject');
        $message ->message = $request->input('message');

        $message->save(); // save to DB

        return redirect()->route('home')->with('success', 'Message Sent! Thank you!!'); //redirect to home page

    }

    public function getMessages(){
        $messages = Message::all();
        
        return view('messages', ['messages'=>$messages]);
    }
}
