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
    <p>
        <a href="{{ route('users.create') }}">新規会員登録</a>
    </p>

    <!--会員検索-->
    <p>
        <a href="{{ route('users.search') }}">会員情報検索</a>
    </p>
@endsection