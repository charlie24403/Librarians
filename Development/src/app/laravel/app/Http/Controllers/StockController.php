<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Document;
use App\Models\Category;

class StockController extends Controller
{
    public function menu()
    {
        return view('stocks/menu');
    }

    public function search()
    {
        $categories = Category::all();
        return view('stocks/search', ['categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $documents_query = Document::with('category');
        if ($request->isbn)
        {
        $documents_query->where('isbn', $request->isbn);
        }
        if ($request->title)
        {
            $documents_query->where('title', 'LIKE', '%'. $request->title. '%');
        }
        if ($request->category_id)
        {
        $documents_query->where('category_id', $request->category_id);
        }
        if ($request->author)
        {
        $documents_query->where('author', 'LIKE', '%'. $request->author. '%');
        }
        if ($request->publisher)
        {
            $documents_query->where('publisher', 'LIKE', '%'. $request->publisher. '%');
        }
        if ($request->published)
        {
            $documents_query->where('published', $request->published);
        }
        $documents = $documents_query->orderBy('isbn')->get();

        $stocks_query = Stock::orderBy('document_id');
        foreach ($documents as $document)
        {
            var_dump($document['id']); # test-code

            $stocks_query->orWhere('document_id', $document['id']);
        }
        $stocks = $stocks_query->paginate(10);

        return view('stocks/index', ['stocks' => $stocks]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
