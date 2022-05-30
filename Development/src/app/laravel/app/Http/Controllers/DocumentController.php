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
        "category_id" => "required",
		"author" => "required|string|max:20",
        "publisher" => "required|string|max:20",
        "published" => "required"
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
    public function create(Request $request)
    {
        $categories = Category::all();

        $created = $request->session()->get("created");
        $request->session()->forget("created");

        if($created){
            return view('documents/create', ['categories' => $categories, 'created' => $created]);
        }else{
            return view('documents/create', ['categories' => $categories]);
        }
    }

    public function confirm(Request $request)
    {
        $categories = Category::all();

        $confirm_type = $request->confirm_type;
        $form_data = $request->only($this->formItems);

        $validator = Validator::make($form_data, $this->validator);
		if($validator->fails()){
            if ($confirm_type == "edit") {
                $document_id = $request->document_id;
                return redirect(route("documents.edit", $document_id))
				->withInput()
				->withErrors($validator);
            }elseif ($confirm_type == 'create') {
                return redirect(route("documents.create"))
				->withInput()
				->withErrors($validator);
            }
		}

		$request->session()->put("form_data", $form_data);

        if ($confirm_type == "edit") {
            $document_id = $request->document_id;

            return view('documents/confirm', ['categories' => $categories, 'confirm_type' => $confirm_type, 'document_id' => $document_id,  'form_data' => $form_data]);
        }elseif ($confirm_type == 'create') {
            return view('documents/confirm', ['categories' => $categories, 'confirm_type' => $confirm_type, 'form_data' => $form_data]);
        }
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

		return redirect( route('documents.create') )->with('created', TRUE);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $categories = Category::all();

        $document = Document::find($id);

        $edited = $request->session()->get("edited");
        $request->session()->forget("edited");

        if($edited){
            return view('documents.show', ['categories' => $categories, 'document' => $document, 'edited' => $edited]);
        }else{
            return view('documents.show', ['categories' => $categories, 'document' => $document]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $categories = Category::all();

        $document = Document::find($id);
        return view('documents.edit', ['categories' => $categories, 'document' => $document]);
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
        $form_data = $request->session()->get("form_data");
		if(!$form_data){
			return redirect( route('documents.edit') );
		}

        Document::where('id','=',$id)->update([
            'isbn' => $form_data["isbn"],
            'title' => $form_data["title"],
            'category_id' => $form_data["category_id"],
            'author' => $form_data["author"],
            'publisher' => $form_data["publisher"],
            'published' => $form_data["published"]
        ]);

		$request->session()->forget("form_data");

		return redirect( route('documents.show', $id) )->with('edited', TRUE);;
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
