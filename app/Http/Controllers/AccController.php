<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AccController extends Controller
{
    public function index ()
    {
        return view('account.index');
    }

}
