<?php

namespace App\Http\Controllers;

use App\Mail\jalalskmail;

use Illuminate\Support\Facades\Mail;
class mailController extends Controller
{

    public function index(){
       return view('emails.sendMail');
    }

    public function sendMail(){
    $mail=new jalalskmail();
    Mail::to("mdjalalsk018@gmail.com")->send($mail);

        return "Email sent successfully";
    }
}
