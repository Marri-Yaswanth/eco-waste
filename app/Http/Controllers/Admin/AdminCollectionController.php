<?php

// namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;

// class AdminCollectionController extends Controller
// {
//     public function index()
//     {
//         return view('admin.collections');
//     }
// }

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;

class AdminCollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        return view('admin.collections', compact('collections'));
    }
}
