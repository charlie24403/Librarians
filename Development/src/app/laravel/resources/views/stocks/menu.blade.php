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
    <div class="menu-button">
        <a href="{{ route('stocks.create') }}">
            <button type="button" class="btn btn-outline-secondary btn-lg">新規在庫登録</button>
        </a>
        <a href="{{ route('stocks.search') }}">
            <button type="button" class="btn btn-outline-secondary btn-lg">在庫情報検索</button>
        </a>
    </div>
@endsection
