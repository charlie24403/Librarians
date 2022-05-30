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
    <div class="menu-button">
        <a href="{{ route('documents.create') }}">
            <button type="button">新規資料登録</button>
        </a>
        <a href="{{ route('documents.search') }}">
            <button type="button">資料情報検索</button>
        </a>
    </div>
@endsection
