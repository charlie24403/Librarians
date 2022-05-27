<!-- env -->
@section('page_title', '会員管理メニュー')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'member';
?>

@extends('layouts.app')

@section('content')
    <h1>会員管理メニュー</h1>
    <!--新規会員登録-->
    <a href="{{ route('users.create') }}">
        <button type="button">新規会員登録</button>
    </a>

    <!--会員検索-->
    <a href="{{ route('users.search') }}">
        <button type="button">会員情報検索</button>
    </a>
@endsection