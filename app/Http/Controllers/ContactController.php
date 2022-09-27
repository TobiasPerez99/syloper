<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function form(){

        return view('pages.contact');

    }

    public function send(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('contacto@laravel.com')->send(new ContactEmail($data));

        return redirect()->route('contact.form')->with('contact', 'El Correo fue enviado');
    
    }
}
