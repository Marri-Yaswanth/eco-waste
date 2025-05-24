<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminTransportationController extends Controller
{
    public function index()
    {
        return view('admin.transportation');
    }
}
