<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Psy\CodeCleaner\ReturnTypePass;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengembalikan view ke halaman index dengan membawa data kategori
        $data = Article::all();
        return view('article.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mengembalikan view ke halaman create
        $data = Category::all();
        return view('article.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menambahkan data dalam dorm ke dalam database
        // dd($request);
        $data = $request->all();
        $data['image'] = Storage::put('image',  $request->file('image'));
        Article::create($data);
        return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //mengembalikan view ke halaman edit
        $data = Category::all();
        return view('article.edit', compact('data', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        // mengubah data didalam database dengan data dalam form
        $data = $request->all();

        try {
            $data['image'] = Storage::put('image',  $request->image);
            $article->update($data);
        } catch (\Throwable $th) {
            $data['image'] = $article->image;
            $article->update($data);
        }
        return redirect('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        // menghapus data di database berdasarkan id yang dipilih di tabel
        $article->delete();
        return redirect('article');
    }
    public function blog()
    {
        $data = Article::all();
        return view('blog', compact('data'));
    }
}
