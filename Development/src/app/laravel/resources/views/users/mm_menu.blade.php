<!-- env -->
@section('page_title', '会員管理メニュー')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="menu-button">
        <!--新規会員登録-->
        <a href="{{ route('users.create') }}">
            <button type="button" class="btn btn-outline-secondary btn-lg">新規会員登録</button>
        </a>
        <!--会員検索-->
        <a href="{{ route('users.search') }}">
            <button type="button" class="btn btn-outline-secondary btn-lg">会員情報検索</button>
        </a>
    </div>
@endsection
