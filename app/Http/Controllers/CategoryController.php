<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('kategori.table_kategori', compact(['category']));
    }

    public function create()
    {
        return view('kategori.create_kategori');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect('/category');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('kategori.edit_kategori', compact(['category']));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update($request->all());
        return redirect('/category');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }
}
