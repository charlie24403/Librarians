<!-- env -->
@section('page_title', '資料新規登録')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    @include('commons/flash')
    <form action="{{ route('documents.confirm') }}" method="post">
        @include('/documents/commons/search')
        <button type="submit">確認</button>
        <a href="{{ route('documents.create') }}">
            <button type="button">キャンセル</button>
        </a>
    </form>
@endsection
