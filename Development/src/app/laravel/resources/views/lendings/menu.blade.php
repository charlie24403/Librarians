<!-- env -->
@section('page_title', '貸出管理メニュー')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <h1>貸出管理メニュー</h1>
    <a href="{{ route('lendings.create') }}">新規貸出</a>
    <a href="{{ route('lendings.search') }}" >貸出資料検索</a>
@endsection