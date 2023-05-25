<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getPage(Request $request){
        $page = $request->page;

        return response()->json([
            'page' => $page,
        ], 200);

    }

    public function jsResponse(Request $request){
        return response()->json([
            "message" => "Success",
            "data" => [
                "name" => "John Doe",
                "age" => "25"
            ]
        ], 200);
    }
}
