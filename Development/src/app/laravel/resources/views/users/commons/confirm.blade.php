
<div class = "data-detail">
	@csrf
	<dl>
		<dt>名前</dt>
		<dd>
			{{ $input["name"]}}
		</dd>
		<dt>住所</dt>
		<dd>
			{{ $input["address"]}}
		</dd>
		<dt>電話番号</dt>
		<dd>
			{{ $input["tel"]}}
		</dd>
		<dt>メールアドレス</dt>
		<dd>
			{{ $input["mail"]}}
		</dd>
		<dt>生年月日</dt>
		<dd>
			{{ $input["birth"]}}
		</dd>
	</dl>
</div>
