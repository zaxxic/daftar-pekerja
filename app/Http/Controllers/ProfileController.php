<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function showProfile()  {
        return view('user.profile');
    }

    
}
