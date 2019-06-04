<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;

class AccController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}