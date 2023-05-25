<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submitForm(Request $request){
        $name = $request->input('name');
        $userAgent = $request->header('User-Agent');
        return response()->json([
            'name' => $name,
            'user_agent' => $userAgent
        ], 200);
    }
}
