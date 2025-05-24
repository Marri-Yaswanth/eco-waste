<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class DisposalController extends Controller
{
    public function index()
    {
        return view('user.disposal');
    }
}
