<?php

// namespace App\Http\Controllers\User;

// use App\Http\Controllers\Controller;

// class CollectionController extends Controller
// {
//     public function index()
//     {
//         return view('user.collections');
//     }
// }


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::latest()->get();
        return view('user.collections', compact('collections'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'location' => 'required|string',
            'waste_type' => 'required|string',
            'quantity' => 'nullable|numeric',
            'collected_date' => 'required|date',
            'collector' => 'nullable|string',
        ]);

        Collection::create($validated);
        return redirect()->route('collections')->with('success', 'Collection record added.');
    }
}
