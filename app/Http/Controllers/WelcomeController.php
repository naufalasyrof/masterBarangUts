<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index()
    {
        $pageTitle = 'Welcome';
        return view('welcome', ['pageTitle' => $pageTitle]);
    }
}
