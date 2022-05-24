<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Category;

class DocumentController extends Controller
{
    public function menu()
    {
        return view('documents/menu');
    }

    public function search()
    {
        $categories = Category::all();
        return view('documents/search', ['categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Document::with('category');
        if ($request->isbn) {
        $query->where('isbn', $request->isbn);
        }
        if ($request->title) {
            $query->where('title', 'LIKE', '%'. $request->title. '%');
            }
        if ($request->category_id) {
        $query->where('category_id', $request->category_id);
        }
        if ($request->author) {
        $query->where('author', 'LIKE', '%'. $request->author. '%');
        }
        if ($request->publisher) {
            $query->where('publisher', 'LIKE', '%'. $request->publisher. '%');
        }
        if ($request->published) {
            $query->where('published', $request->published);
        }
        // 商品検索結果を取得
        $documents = $query->orderBy('isbn')->paginate(10);
        // dd($documents);
        // ビューを返す
        return view('documents/index', ['documents' => $documents]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('documents/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('documents/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
