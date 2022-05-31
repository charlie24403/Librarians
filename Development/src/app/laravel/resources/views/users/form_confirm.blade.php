<!-- env -->
@section('page_title', '会員登録確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

<!-- content -->
@section('content')
<div class = "confirm-page">
    <form method="post" action="{{ route('users.send') }}">
        @include('users/commons/confirm')

        <button type="submit" class="btn btn-outline-primary btn-lg">確認</button>
        <button type="button" class="btn btn-outline-secondary btn-lg" onclick="history.back()">戻る</button>
    </form>
</div>
@endsection
