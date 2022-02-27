<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){

        $request->validate([
           'name' => '',
           'email' => 'required|email:rfc,dns',
           'message' => 'required|min:10'
        ]);

        $name = $request->get('name');
        $email = $request->get('email');
        $message = $request->get('message');

        Mail::to('matthew@mincher.org')->send(new ContactMessage($name, $email, $message));

        return response()->noContent();
    }
}
