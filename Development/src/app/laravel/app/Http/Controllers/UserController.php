<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function create(Request $request)
    {
        $user = new User;

        $created = $request->session()->get("created");
        $request->session()->forget("created");

        if($created){
            return view('users/create', ['created' => $created]);
        }else{
            return view('users/create');
        }
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

        //
        $user = new User;
        $user->name = $input["name"];
        $user->address = $input["address"];
        $user->tel = $input["tel"];
        $user->mail = $input["mail"];
        $user->birth = $input["birth"];
        $user->save();


		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect( route('users.create', ['user' => $user]) );
		}

		//セッションを空にする
		$request->session()->forget("form_input");

		return redirect( route('users.create', ['user' => $user]) )->with('created', TRUE);
	}

    public function search(){
        $user = User::all();
        return view('users.search', ['user' => $user]);
    }


    public function index(Request $request){

        $query = User::orderBy('created_at');
        if ($request->name) {
            $query->where('name', 'LIKE', '%'. $request->name. '%');
            }
        if ($request->address) {
        $query->where('address', $request->address);
        }
        if ($request->tel) {
        $query->where('tel', 'LIKE', '%'. $request->tel. '%');
        }
        if ($request->mail) {
            $query->where('mail', 'LIKE', '%'. $request->mail. '%');
        }
        if ($request->birth) {
            $query->where('birth', $request->birth);
        }
        $users = $query->paginate(10);
        return view('users/index', ['users' => $users]);

        /*$users = User::orderBy('created_at', 'desc')->paginate(10);
        return view('users.index', ['users' => $users]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $user = User::find($id);

        $edited = $request->session()->get("edited");
        $request->session()->forget("edited");

        if($edited){
            return view('users.show', ['user' => $user, 'edited' => $edited]);
        }else{
            return view('users.show', ['user' => $user]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update_post(Request $request, $id){
        $user = User::find($id);
        $input = $request->only($this->formItems);

        $validator = Validator::make($input, $this->validator);
		if($validator->fails()){

			return redirect(route('users.edit', $id))
				->withInput()
				->withErrors($validator);
		}
        //セッションに書き込む
		$request->session()->put("form_input", $input);

		return redirect( route('users.update_confirm', $user->id) );
    }

    public function update_confirm(Request $request, $id){
		$user = User::find($id);
        //セッションから値を取り出す
		$input = $request->session()->get("form_input");

		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect( route('users.edit', $id) );
		}
		return view("users.update_confirm",['input' => $input], ['user' => $user]);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update_send(Request $request, $id, User $user){

		//セッションから値を取り出す
		$input = $request->session()->get("form_input");

        User::where('id','=',$id)->update([
            'name' => $input["name"],
            'address' => $input["address"],
            'tel' => $input["tel"],
            'mail' => $input["mail"],
            'birth' => $input["birth"]
        ]);
        $user = User::find($id);

		//セッションに値が無い時はフォームに戻る
		if(!$input){
			return redirect( route('users.edit', $id) );
		}

		//セッションを空にする
		$request->session()->forget("form_input");

        return redirect( route('users.show', $id) )->with('edited', TRUE);;
	}

    public function update_complete($id){
        $user = User::find($id);
		return view("users.update_complete",  ['user' => $user]);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservations = \App\Models\User::find($id);
        $reservations->delete();
        return redirect(route('users.index'));
    }
}
