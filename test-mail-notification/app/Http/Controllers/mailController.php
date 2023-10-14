<?php

namespace App\Http\Controllers;

use App\Mail\jalalskmail;

use Illuminate\Support\Facades\Mail;
class mailController extends Controller
{

    public function sendMail(){
    $mail=new jalalskmail();
    Mail::to("jalal@ts-integration.net")->send($mail);

        return "Email sent successfully";
    }
}
