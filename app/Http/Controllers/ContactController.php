<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Message;
use App\Jobs\ContactJob;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(ContactFormRequest $request){
        //Inserer d'abord le message avant l'envoi de l'email
        Message::create($request->validated());

        //§Mail::to('calebkoffi21@gmail.com')->send(new ContactUs($request->validated()));
        $job = (new ContactJob($request->validated()));
        dispatch($job);

        return redirect()->back()->with('success', 'Votre mail a été bien envoyé');

    }
}
