<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function sendMail(){
        $message = 'Message Sent Successfully';
        $name = 'Wabjabi';
        Mail::to('dahabusaidi@gmail.com')->send(new SendMailable($name));
        return redirect()->back()->with('message', $message);
    }
}
