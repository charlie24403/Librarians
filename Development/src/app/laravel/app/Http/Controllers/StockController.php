<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers;
use Validator;
use App\Models\Document;
use App\Models\Stock;
use App\Models\Category;
use Carbon\Carbon;

class StockController extends Controller
{
    private $formItems = ["title", "document_id", "arrival"];

	private $validator = [
        "document_id" => "required",
	];

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
    public function create(Request $request)
    {
        $categories = Category::all();

        $created = $request->session()->get("created");
        $request->session()->forget("created");

        if($created){
            return view('stocks/create', ['categories' => $categories, 'created' => $created]);
        }else{
            return view('stocks/create', ['categories' => $categories]);
        }
    }

    public function confirm(Request $request)
    {


        $categories = Category::all();

        $confirm_type = $request->confirm_type;
        $form_data = $request->only($this->formItems);

        $document = Document::find($form_data['document_id']);

        $validator = Validator::make($form_data, $this->validator);
		if($validator->fails()){
            if ($confirm_type == "edit") {
                return redirect(route("stocks.edit"))
				->withInput()
				->withErrors($validator);
            }elseif ($confirm_type == 'create') {
                return redirect(route("stocks.create"))
				->withInput()
				->withErrors($validator);
            }
		}

		$request->session()->put("form_data", $form_data);

        if ($confirm_type == "edit") {
            $stock_id = $request->stock_id;

            return view('stocks/confirm', ['categories' => $categories, 'confirm_type' => $confirm_type, 'stock_id' => $stock_id,  'form_data' => $form_data], ['document' => $document]);
        }elseif ($confirm_type == 'create') {
            return view('stocks/confirm', ['categories' => $categories, 'confirm_type' => $confirm_type, 'form_data' => $form_data], ['document' => $document]);
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
			return redirect( route('stocks.create') );
		}

        $stock = new Stock;
        $stock->document_id = $form_data["document_id"];
        $stock->save();

		$request->session()->forget("form_data");

		return redirect( route('stocks.create') )->with('created', TRUE);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request ,$id)
    {
        $stock = Stock::find($id);

        return view('stocks.show', ['stock' => $stock]);
        /*
        $edited = $request->session()->get("edited");
        $request->session()->forget("edited");
        dd($request);

        if($edited){
            return view('stocks.show', ['stock' => $stock, 'edited' => $edited]);
        }else{
            return view('stocks.show', ['stock' => $stock]);
        }*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stock::find($id);
        return view('stocks.edit', ['stock' => $stock]);

    }

    /*
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
			return redirect( route('stocks.edit') );
		}


        Stock::where('id','=',$id)->update([
            'document_id' => $form_data["document_id"],
        ]);

		$request->session()->forget("form_data");

		return redirect( route('stocks.show', $id, ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        $stock = \App\Models\Stock::find($id);
        $stock->delete();
        return redirect(route('stocks.index'));
    }*/

    public function waste($id){
        $stock = Stock::find($id);

        $stock["disposal"] = Carbon::now(); // 今日
        $stock->save();
        return view('stocks.menu');
    }
}
