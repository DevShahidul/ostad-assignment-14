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
}
