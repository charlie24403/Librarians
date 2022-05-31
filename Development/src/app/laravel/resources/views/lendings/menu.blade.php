<!-- env -->
@section('page_title', '貸出管理メニュー')
<?php
    $IS_MENU = TRUE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="menu-button">
        <a href="{{ route('lendings.create') }}">
            <button type="button" class="btn btn-outline-secondary btn-lg">新規貸出登録</button>
        </a>
        <a href="{{ route('lendings.search') }}" >
            <button type="button" class="btn btn-outline-secondary btn-lg">貸出情報検索</button>
        </a>
    </div>
@endsection
