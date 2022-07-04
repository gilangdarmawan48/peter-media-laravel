<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writer = Writer::all();
        return view('penulis.table_penulis', compact(['writer']));
    }

    public function create()
    {
        return view('penulis.create_penulis');
    }

    public function store(Request $request)
    {
        Writer::create($request->all());
        return redirect('/writer');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $writer = Writer::find($id);
        return view('penulis.edit_penulis', compact(['writer']));
    }

    public function update(Request $request, $id)
    {
        $writer = Writer::find($id);
        $writer->update($request->all());
        return redirect('/writer');
    }

    public function destroy($id)
    {
        $writer = Writer::find($id);
        $writer->delete();
        return redirect('/writer');
    }
}
