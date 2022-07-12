<?php

namespace App\Http\Controllers;

class MessagesController extends Controller
{
    public function store()
    {
        Request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'

        ]);

        return 'Datos validados';
    }
}
