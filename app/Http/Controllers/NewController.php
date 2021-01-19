<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Mail\SendingMail;

class NewController extends Controller
{
    /* --------------------------------- LIST DONATION -------------------------------- */
    public function index(Request $request)
    {
        $data = User::first();
        // dd($data);
        // return view('welcome');

        return view('welcome', [
            'data' => $data,
        ]);
    }

}