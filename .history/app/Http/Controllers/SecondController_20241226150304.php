<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Second extends Controller
{
    public function postData(Request $request)
    {
        return response()->json([
            'data' => 100,
            'status' => 'berhasil'
        ]);
    }
}
