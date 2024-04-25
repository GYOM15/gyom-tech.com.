<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Jobs\ContactJob;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(){
        $data = request()->validate([
            'name' => 'required|min:3',
            'firstname' => 'required|min:3',
            'phone' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);
        //Inserer d'abord le message avant l'envoi de l'email
        Message::create($data);

        //§Mail::to('calebkoffi21@gmail.com')->send(new ContactUs($data));
        $job = (new ContactJob($data));
        dispatch($job);

        return redirect()->back()->with('success', 'Votre mail a été bien envoyé');

    }
}
