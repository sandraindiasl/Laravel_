<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
                'name.required' => __('Introduce tu nombre')
        ]);

        Mail::to('indiaslopezsandra@gmail.com')->queue(new MessageReceived($message));

        return 'Mensaje enviado';
    }
}
