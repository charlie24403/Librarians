<!-- env -->
@section('page_title', '会員登録完了')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>
@extends('layouts.app')

<!-- content -->
@section('content')
        <p>登録完了しました</p>
        <a href="{{ route('users.create') }}">
            <button type="button">戻る</button>
        </a>
@endsection
