<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LastName;
use Illuminate\Http\Request;


class LastNameReceiverController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'last_name' => 'required',
        ]);

        $name = LastName::create($validate);

        return response()->json(['stats' => 'stored', 'last_name' => $name]);
    }
}
