<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function register(Request $request){
        $response = Http::post('http://127.0.0.1:8000/api/auth/register',
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'password_confirmation' => $request->password_confirmation,
            ]);

        $response->json();

        // dd($response);

        return redirect('/apiwithkey');
    }
}
