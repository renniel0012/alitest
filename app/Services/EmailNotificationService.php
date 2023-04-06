<?php

namespace App\Services;

use App\Mail\SendWelcomeEmailMail;
use Illuminate\Support\Facades\Mail;

class EmailNotificationService {

    public function sendWelcomEmailNotification($email)
    {
        Mail::to($email)->queue(new SendWelcomeEmailMail);
    }

}