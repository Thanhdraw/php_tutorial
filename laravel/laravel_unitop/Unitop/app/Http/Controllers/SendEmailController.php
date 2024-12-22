<?php

namespace App\Http\Controllers;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    //
    public function sendEmail()
    {
        try {
            $users = DB::table('users')->get();
            Mail::to('narutothanh28@gmail.com')->send(new SampleMail($users));
            return "Email sent successfully";

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
