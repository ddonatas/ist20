<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function plain_email() {
        $data = array('name'=>"Gerb. xxx");
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('d.dervinis@svako.lt', 'Donatas Dervinis')->subject
              ('Testas iš Laravel');
           $message->from('svakotest@gmail.com','SVAKO IST20');
        });
        echo "Išsiųstas laiškas";
}
public function html_email() {
    $data = array('name'=>"Gerb. xxx");
    Mail::send('mail', $data, function($message) {
        $message->to('d.dervinis@svako.lt', 'Donatas Dervinis')->subject
        ('Testas iš Laravel');
     $message->from('svakotest@gmail.com','SVAKO IST20');
    });
    echo "HTML Išsiųstas laiškas";
 }
}