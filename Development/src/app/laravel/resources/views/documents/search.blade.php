<!-- env -->
@section('page_title', '資料検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <form action="{{ route('documents.index') }}" method="get">
        @include('/commons/search')
        <button type="submit">検索</button>
        <a href="{{ route('documents.search') }}">
            <button type="button">キャンセル</button>
        </a>
    </form>
@endsection
