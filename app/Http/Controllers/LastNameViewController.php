<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\LastName;
use Illuminate\Http\Request;

class LastNameViewController extends Controller
{
    public function index()
    {
        $names = LastName::latest()->get();
        return view('welcome', compact('names'));
    }
}
