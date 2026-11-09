<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // TODO: Email verzending configureren voor Railway
        // Mail::to('nailedby.rhode@gmail.com')->send(new ContactMail($validated));

        return redirect()->route('contact')
            ->with('success', 'Bedankt voor je bericht! Ik neem zo snel mogelijk contact met je op.');
    }
}
