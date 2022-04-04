<?php

namespace App\Http\Controllers;

use App\Console\Services\MailChimpNewsletter;
use App\Console\Services\Newsletter;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
   public function __invoke(Newsletter $newsletter)
   {
       request()->validate(['email' => 'email|required']);

       try {
           $newsletter->subscribe(request('email'));
       } catch (Exception $exception) {
           throw ValidationException::withMessages([
               'email' => 'Sorry we can\'t add this email to our newsletter list.'
           ]);
       }

       return redirect(RouteServiceProvider::HOME)->with(
           'success',
           'You are now subscribed to our newsletter!'
       );
   }
}
