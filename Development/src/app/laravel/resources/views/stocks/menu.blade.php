<!-- env -->
@section('page_title', '在庫管理メニュー')
<?php
    $IS_MENU = TRUE;
    $CATEGORY = 'stocks';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <a href="{{ route('stocks.create') }}">
        <button type="button">新規在庫登録</button>
    </a>
    <a href="{{ route('stocks.search') }}">
        <button type="button">検索</button>
    </a>
@endsection
