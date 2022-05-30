<!-- env -->
@section('page_title', '会員検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <form action="{{ route('users.index') }}" method="get">
        @include('/commons/search')
        <button type="submit">検索</button>
        <a href="{{ route('users.search') }}">
            <button type="button">キャンセル</button>
        </a>
    </form>
@endsection