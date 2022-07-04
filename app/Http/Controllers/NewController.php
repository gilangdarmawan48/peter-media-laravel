<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function index()
    {
        // $news = News::with(['category'])->latest();
        // $news = News::all();
        $news = DB::table('categories')
            ->join('news', 'categories.id', '=', 'news.categories_id')
            ->select('news.*', 'categories.nama_kategori')
            ->get();
            // dd($news);
        return view('berita.table_berita', ['news' => $news]);
    }

    public function indexHome()
    {
        // $news = News::with(['category'])->latest();
        // $news = News::all();
        $news = DB::table('categories')
            ->join('news', 'categories.id', '=', 'news.categories_id')
            ->select('news.*', 'categories.nama_kategori')
            ->get();
            // dd($news);
        return view('index', ['news' => $news]);
    }

    public function create()
    {
        return view('berita.create_berita');
    }

    public function store(Request $request)
    {
        News::create($request->all());
        return redirect('/news');
    }

    public function show(News $new)
    {
        
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('berita.edit_berita', compact(['news']));
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->update($request->all());
        return redirect('/news');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('/news');
    }
}
