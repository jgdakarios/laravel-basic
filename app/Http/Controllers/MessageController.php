<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = request()->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required',
            'content'   => 'required|min:3',
        ], [
            'name.required'     => __('I need your name') // Custom messages
        ]);

        Mail::to('jgdakarios@gmail.com')->queue(new MessageReceived( $message ));
        
        return 'Mensaje Enviado';
    }
}
