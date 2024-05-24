<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Message;
use App\Jobs\ContactJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    public function send(ContactFormRequest $request)
    {
        $recaptcha = $request->input('g-recaptcha-response');

        if (is_null($recaptcha)) {
            return redirect()->back()->with('error', "Veuillez compléter le reCAPTCHA avant de continuer");
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";
        $client = new Client();

        $params = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha,
            'remoteip' => $request->ip()
        ];
        
        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params'=>$params
            ]
        );

        $result = json_decode((string)$response->getBody());


        // dd(config('services.recaptcha.secret'),$result);

        if ($result->success == true) {
            // Insérer d'abord le message avant l'envoi de l'email
            Message::create($request->validated());
            // Mail::to('calebkoffi21@gmail.com')->send(new ContactUs($request->validated()));
            $job = (new ContactJob($request->validated()));
            dispatch($job);
            return redirect()->back()->with('success', 'Votre mail a été bien envoyé');
        } else {
            return redirect()->back()->with('error', "Veuillez compléter le reCAPTCHA à nouveau pour continuer");
        }
    }
}
