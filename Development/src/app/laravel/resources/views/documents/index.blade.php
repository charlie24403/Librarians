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
    <a href="{{ route('documents.search') }}">
        <button type="button">再検索</button>
    </a>
    @include('/documents/commons/documents_datalist')
@endsection
