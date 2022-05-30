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
    public function create(Request $request)
    {
        $lendings = \App\Models\Lending::all();
        $created = $request->session()->get("created");

        if($created){
            return view('lendings/create', ['lendings' => $lendings, 'created' => $created]);
        }else{
            return view('lendings/create', ['lendings' => $lendings]);
        }
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
        $user = \App\Models\User::find($lendings->user_id);
        $document = \App\Models\Document::find($lendings->document_id);
        return view('lendings.show', ['lendings' => $lendings ,'document' => $document, 'user' => $user] );
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

    //update_postメソッドの記述
    public function update_post(Request $request, $id)
    {
        $lendings = Lending::find($id);
        $input = $request->only($this->formItems);
        
        $validator = Validator::make($input, $this->validator);
		if($validator->fails()){

			return redirect(route('lendings.edit', $id))
				->withInput()
				->withErrors($validator);
		}
        //セッションに書き込む
		$request->session()->put("form_input", $input);

		return redirect( route('lendings.update_confirm', $lendings->id) );
    }

    public function update_confirm(Request $request, $id)
    {
        $lendings = Lending::find($id);
        //セッションから値を取り出す
		$input = $request->session()->get("form_input");
		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect( route('lendings.edit', $id) );
		}
		return view("lendings.edit_confirm",['input' => $input], ['lendings' => $lendings]);
    }

    public function update_send($id, Lending $lendings, Request $request)
    {
        
        //セッションから値を取り出す
		$input = $request->session()->get("form_input");
        
        //戻るボタンが押された時
		if($request->has("back")){
    			return redirect( route('lendings.edit', $id) )
    				->withInput($input);
        }

        Lending::where('id','=',$id)->update([
            'document_id' => $input["document_id"],
            'user_id' => $input["user_id"],
            'return_date' => $input["return_date"],
            'finishing_date' => $input["finishing_date"]
        ]);
        $lendings = Lending::find($id);
		
		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect( route('lendings.edit', $id) );
		}

		//セッションを空にする
		$request->session()->forget("form_input");

        return redirect( route('lendings.update_complete', $id) );

    }

    public function complete($id){	
        $lendings = Lending::find($id);
		return view("lendings.update_complete" , ['lendings' => $lendings] );

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
