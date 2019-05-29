<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(){
        $message = 'message sent';
        return redirect()->back()->with('message', $message);
    }
}
