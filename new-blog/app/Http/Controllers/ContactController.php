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

        return redirect()->route('home'); //redirect to home page

    }
}
