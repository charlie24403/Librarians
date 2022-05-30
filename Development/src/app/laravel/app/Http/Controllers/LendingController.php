<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lending;
use App\Models\User;
use App\Models\Document;
use Validator;

class LendingController extends Controller
{
    private $formItems = ["user_id", "document_id", "created_at", "return_date", "finishing_date"];

    private $validator = [
		"user_id" => "required",
		"document_id" => "required",
		"return_date" => "required|date|after:today",
	];


    public function menu()
    {
        $lendings = \App\Models\Lending::all();
        return view('lendings.menu', ['lendings' => $lendings]);
    }

    public function search()
    {
        $lendings = \App\Models\Lending::all();
        return view('lendings.search', ['lendings' => $lendings]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Lending::orderBy('user_id');
        if ($request->user_id) {
        $query->where('user_id',  $request->user_id);
        }
        if ($request->document_id) {
            $query->where('document_id', $request->document_id);
        }
        if ($request->return_date) {
            $query->where('return_date', $request->return_date);
        }

        $lendings = $query->paginate(10);
        return view('lendings.index', ['lendings' => $lendings]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lendings = \App\Models\Lending::all();
        return view('lendings.create', ['lendings' => $lendings]);
    }

    public function confirm(Request $request)
    {
        $form_data = $request->only($this->formItems);

        $validator = Validator::make($form_data, $this->validator);
		if($validator->fails()){
			return redirect(route('lendings.create'))
				->withInput()
				->withErrors($validator);
		}

        //ユーザIDの取得
        $query = Lending::query();
        // $id_check = $query->where('user_id', [$form_data["user_id"]]);
        // $ids = $query->get();
        // $id_count = count($ids);

        //取得したIDかつNULLのデータを取得
        $date_check = $query->where('user_id', [$form_data["user_id"]])
                            ->whereNull('finishing_date')->get();
        // $dates = $query->get();
        $date_count = count($date_check);

        // $data_count = $id_count - $date_count;

        if ($date_count < 5){
		$request->session()->put("form_data", $form_data);
        return view('lendings/confirm', ['form_data' => $form_data]);
        }else{
            $err ='この会員は既に5冊借りています。';
            return view('lendings.create',['err' => $err]);
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
			    return redirect( route('lendings.create') );
		    }
            $lending = new Lending;
            $lending->user_id = $form_data["user_id"];
            $lending->document_id = $form_data["document_id"];
            $lending->return_date = $form_data["return_date"];
            $lending->save();

		    $request->session()->forget("form_data");

		    return redirect( route('lendings.create') )->with('created', TRUE);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lendings = \App\Models\Lending::find($id);
        $documents = \App\Models\Document::all();
        $users = \App\Models\User::all();
        return view('lendings.show', ['lendings' => $lendings ,'documents' => $documents, 'users' => $users] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lendings = Lending::find($id);
        return view('lendings.edit', ['lendings' => $lendings]);
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
        Lending::where('id','=',$id)->update([
            'user_id' => $request->user_id,
            'document_id' => $request->document_id,
            'return_date' => $request->return_date,
            'finishing_date' => $request->finishing_date,
        ]);
        $lendings = Lending::find($id);

        return view("lendings.update_complete", ['lendings' => $lendings]);
    }

    public function complete(){
		return view("lendings.form_complete");
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lendings = \App\Models\Lending::find($id);
        $lendings->delete();
        return redirect(route('lendings.menu'));
    }
}
