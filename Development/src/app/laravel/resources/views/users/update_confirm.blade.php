<!-- env -->
@section('page_title', '更新確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

@section('content')
<h3>確認</h3>
<form method="post" action="{{ route('users.update_send', $user->id) }}">
	@include('users/commons/confirm')

	<input name="back" type="submit" value="戻る" />
	<input type="submit" value="登録する" />

</form>  
@endsection
