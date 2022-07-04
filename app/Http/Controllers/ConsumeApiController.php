<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsumeApiController extends Controller
{
    public function apiWithKey(){
        
        $response = Http::get('http://127.0.0.1:8000/api/articles');

        $responseBody = json_decode($response->getBody());

        // dd($responseBody);

        return view('konsumapi.tableapi', compact('responseBody'));
    }

    public function create(){
        return view('konsumapi.create_api');
    }

    public function store(Request $request){

        $token = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTY1Njc0ODQyNiwiZXhwIjoxNjU2NzUyMDI2LCJuYmYiOjE2NTY3NDg0MjYsImp0aSI6Iml1S3hrTGFuREs4bndzN0siLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.mYaVrJURZ6L85yzl8eL10aqWVclNj2HbfdaCadZgq5A';        

        $response = Http::withHeaders(
            [
                'Authorization' => $token
            ]
            )->post('http://127.0.0.1:8000/api/articles',
            [
                'title' => $request->judul,
                'body' => $request->isi
            ]);

        $response->json();

        return redirect('/apiwithkey');
    }

    public function show(){

    }

    public function edit($id){

        $responseget = Http::get('http://127.0.0.1:8000/api/articles/'.$id);
        $response = json_decode($responseget);
        return view('konsumapi.edit_api', compact('response'));
    }

    public function update(Request $request, $id){

        $token = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTY1Njc0ODQyNiwiZXhwIjoxNjU2NzUyMDI2LCJuYmYiOjE2NTY3NDg0MjYsImp0aSI6Iml1S3hrTGFuREs4bndzN0siLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.mYaVrJURZ6L85yzl8eL10aqWVclNj2HbfdaCadZgq5A';

        $response = Http::withHeaders(
            [
                'Authorization' => $token
            ]

            )->put('http://127.0.0.1:8000/api/articles/'.$id,

            [
                'title' => $request->judul,
                'body' => $request->isi
            ]);

        $response->json();
        return redirect('/apiwithkey');
    }

    public function destroy($id){

        $token = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTY1Njc0ODQyNiwiZXhwIjoxNjU2NzUyMDI2LCJuYmYiOjE2NTY3NDg0MjYsImp0aSI6Iml1S3hrTGFuREs4bndzN0siLCJzdWIiOjEsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.mYaVrJURZ6L85yzl8eL10aqWVclNj2HbfdaCadZgq5A';

        $response = Http::withHeaders(
            [
                'Authorization' => $token
            ])->delete('http://127.0.0.1:8000/api/articles/'.$id);
        
        $response->json();
        return redirect('/apiwithkey');
    }
}
