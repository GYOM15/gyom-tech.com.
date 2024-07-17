<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Mail\ContactUs;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\ContactRequestEvent;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;

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

        $response = $client->post($url, ['form_params' => $params]);
        $result = json_decode((string) $response->getBody());

        if ($result && $result->success == true) {
            //Inserer ces informations dans la base de données
            $message = Message::create($request->validated());
            //Déclencher l'évènement
            event(new ContactRequestEvent($message));
            return redirect()->back()->with('success', 'Votre mail a été bien envoyé');
        } else {
            return redirect()->back()->with('error', "Veuillez compléter le reCAPTCHA à nouveau pour continuer");
        }
    }
}

