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

    public function uploadAvatar(Request $request){
        // Check if file was uploaded
        $file = $request->file('avatar');
        dd($file);
        if ($file) {

            // Get original filename
            $filename = $file->getClientOriginalName();

            dd($file, $filename);

            // Move uploaded file to public/uploads directory
            $file->move(public_path('uploads'), $filename);

            // Return success response
            return response()->json(['message' => 'File uploaded successfully'], 200);

        } else {
            // dd('Error');
            // Return error response
            return response()->json(['message' => 'No file uploaded'], 400);

        }
    }

    public function uploadform(){
        return view('upload');
    }
}
