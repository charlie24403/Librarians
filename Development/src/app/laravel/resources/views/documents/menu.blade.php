<!-- env -->
@section('page_title', '資料管理メニュー')
<?php
    $IS_MENU = TRUE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <a href="{{ route('documents.create') }}">
        <button type="button">新規登録</button>
    </a>
    <a href="{{ route('documents.search') }}">
        <button type="button">検索</button>
    </a>
@endsection
