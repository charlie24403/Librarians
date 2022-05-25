<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    private $formItems = ["name", "address", "tel", "mail", "birth"];

	private $validator = [
		"name" => "required|string|max:50",
		"address" => "required|string|max:200",
		"tel" => "required|string|max:20",
        "mail" => "required|string|max:50",
        "birth" => "required",
	];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function menu()
    {
        return view('users.mm_menu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        return view('users.form');
    }

    public function post(Request $request){
        $input = $request->only($this->formItems);
        $validator = Validator::make($input, $this->validator);
		if($validator->fails()){

			return redirect(route('users.create'))
				->withInput()
				->withErrors($validator);
		}
        //セッションに書き込む
		$request->session()->put("form_input", $input);

		return redirect( route('users.confirm') );
    }

    public function confirm(Request $request){
		//セッションから値を取り出す
		$input = $request->session()->get("form_input");
		
		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect( route('users.create') );
		}
		return view("users.form_confirm",['input' => $input]);
	}	

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request){
        
		//セッションから値を取り出す
		$input = $request->session()->get("form_input");
        
        //戻るボタンが押された時
		if($request->has("back")){
    			return redirect( route('users.create') )
    				->withInput($input);
	    }

        //
        $user = new User;
        $user->name = $input["name"];
        $user->address = $input["address"];
        $user->tel = $input["tel"];
        $user->mail = $input["mail"];
        $user->birth = $input["birth"];
        $user->save();
        
        //$name = $request->input('name');
        //$address = $request->input('address');
        //$tel = $request->input('tel');
        //$mail = $request->input('mail');
        //$birth = $request->input('birth');
        //User::insert([
            //"name" => $name, 
            //"address" => $address, 
            //"tel" => $tel, 
            //"mail" => $mail, 
            //"birth" => $birth, 
        //]);//
		
		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect( route('users.create') );
		}

		//セッションを空にする
		$request->session()->forget("form_input");
        
		return redirect( route('users.complete') );
	}

    public function complete(){	
		return view("users.form_complete");
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
