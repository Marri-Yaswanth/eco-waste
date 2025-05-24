<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class TransportationController extends Controller
{
    public function index()
    {
        return view('user.transportation');
    }
}
