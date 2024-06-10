<?php

namespace App\Http\Controllers;

use App\Jobs\NewsletterJob;
use App\Models\Newslettermail;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    public function register(NewsletterRequest $newsletterRequest){
        Newslettermail::create($newsletterRequest->validated());
        $job = (new NewsletterJob($newsletterRequest->validated()));
        dispatch($job);

        return redirect()->back()->with('success', 'Votre mail a été bien envoyé');
    }
}
