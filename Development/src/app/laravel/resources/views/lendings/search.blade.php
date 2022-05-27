<!-- env -->
@section('page_title', '貸出資料検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <form action="{{ route('lendings.index') }}" method="get">
        @include('/lendings/commons/search')
        <button type="submit">検索</button>
        <a href="{{ route('lendings.search') }}">
            <button type="button">キャンセル</button>
        </a>
    </form>
@endsection