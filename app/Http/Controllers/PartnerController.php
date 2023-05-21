<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function signup(Request $request)
    {
        $email = $request->email;

        dd($email);
        
    }
}
