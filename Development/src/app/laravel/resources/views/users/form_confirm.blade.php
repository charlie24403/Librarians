@extends('layouts.app')

@section('content')
<h3>確認</h3>
<form method="post" action="{{ route('users.send') }}">
	@csrf
	<label>名前</label>
	<div>
		{{ $input["name"] }}
	</div>
	<label>住所</label>
	<div>
		{{ $input['address'] }}
	</div>
	<label>電話番号</label>
	<div>
		{{ $input['tel'] }}
	</div>
    <label>メールアドレス</label>
	<div>
		{{ $input["mail"] }}
	</div>
    <label>生年月日</label>
	<div>
		{{ $input["birth"] }}
	</div>

	<input name="back" type="submit" value="戻る" />
	<input type="submit" value="登録する" />

</form>  
@endsection