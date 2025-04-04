<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\FinoMail;

class MailController extends Controller
{
    public function index()
    {    	
        $mailData = [
            'title' => 'Mail from Startupfino.com'
        ];
         
        Mail::to('surajprakashratna2009@gmail.com')->send(new FinoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
