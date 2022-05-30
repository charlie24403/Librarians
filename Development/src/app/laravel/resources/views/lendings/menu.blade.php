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
    <a href="{{ route('lendings.create') }}"><button type="button">新規貸出</button></a>
    <a href="{{ route('lendings.search') }}" ><button type="button">検索</button></a>
@endsection
