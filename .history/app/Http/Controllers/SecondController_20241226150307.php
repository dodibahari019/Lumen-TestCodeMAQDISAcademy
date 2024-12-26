<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function postData(Request $request)
    {
        return response()->json([
            'data' => 100,
            'status' => 'berhasil'
        ]);
    }
}
