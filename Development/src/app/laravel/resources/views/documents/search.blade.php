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
    <div class="input-page">
        <form action="{{ route('documents.index') }}" method="get">
            @include('/documents/commons/form')
            <button type="submit" class="btn btn-outline-primary btn-lg">検索</button>
            <a href="{{ route('documents.search') }}">
                <button type="button" class="btn btn-outline-secondary btn-lg">キャンセル</button>
            </a>
        </form>
    </div>
@endsection
