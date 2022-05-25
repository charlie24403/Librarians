<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Document;
use App\Models\Category;

class DocumentController extends Controller
{
    private $formItems = ["isbn", "title", "category_id", "author", "publisher", "published"];

	private $validator = [
		"isbn" => "required|string|between:10,13",
		"title" => "required|string|max:20",
		"author" => "required|string|max:20",
        "publisher" => "required|string|max:20",
	];


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
        $documents = $query->orderBy('isbn')->paginate(10);

        return view('documents/index', ['documents' => $documents]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('documents/create', ['categories' => $categories]);
    }

    public function confirm(Request $request)
    {
        $form_data = $request->only($this->formItems);

        $validator = Validator::make($form_data, $this->validator);
		if($validator->fails()){
			return redirect(route('documents.create'))
				->withInput()
				->withErrors($validator);
		}

		$request->session()->put("form_data", $form_data);

        return view('documents/confirm', ['form_data' => $form_data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->session()->get("form_data");
		if(!$form_data){
			return redirect( route('documents.create') );
		}

        $document = new Document;
        $document->isbn = $form_data["isbn"];
        $document->title = $form_data["title"];
        $document->category_id = $form_data["category_id"];
        $document->author = $form_data["author"];
        $document->publisher = $form_data["publisher"];
        $document->published = $form_data["published"];
        $document->save();

		$request->session()->forget("form_data");

		return redirect( route('documents.create') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = \App\Models\Document::find($id);
        return view('documents.show', ['document' => $document]);
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
        $document = \App\Models\Document::find($id);
        $document->delete();
        return redirect(route('documents.index'));
    }
}
