<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminDisposalController extends Controller
{
    public function index()
    {
        return view('admin.disposal');
    }
}
