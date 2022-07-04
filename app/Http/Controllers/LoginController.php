<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login(Request $request){
        $response = Http::post('http://127.0.0.1:8000/api/auth/login',
            [
                'email' => $request->email,
                'password' => $request->password
            ]);

        $response->json();
        dd($response);

        return redirect('/apiwithkey');
    }
}
