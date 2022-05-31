<!-- env -->
@section('page_title', '更新確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

@section('content')
<div class = "confirm-page">
	<h3>確認</h3>
		<form method="post" action="{{ route('users.update_send', $user->id) }}">
			@include('users/commons/confirm')

            <button type="submit" class="btn btn-outline-primary btn-lg">確認</button>
            <button type="button" class="btn btn-outline-secondary btn-lg" onclick="history.back()">戻る</button>

		</form>
</div>
@endsection
