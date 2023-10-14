<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Notification; // Added 'use' statement

use App\Notifications\sendEmailNotification;
class sendEmailNotificationController extends Controller
{
    public function sendEmailNotification()
    {
        $user=User::all();
        $details = [
            'greeting'=>" Hello Developer",
            'body'=>" I am very exciting for meting with you",
            'actionText'=>" Share your knowledge",
            'actionUrl'=>" /",
            'lastLine'=>" Thanks!",
        ];

     Notification::send($user,new SendEmailNotification($details));
     return "Notification sent successfully";
}
}
