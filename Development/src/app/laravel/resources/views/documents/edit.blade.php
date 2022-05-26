<!-- env -->
@section('page_title', '資料情報更新')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    @include('commons/flash')
    <form action="{{ route("documents.confirm") }}" method="post">
        <input type="hidden" name="confirm_type" value="edit">
        <input type="hidden" name="document_id" value="{{ $document['id'] }}">

        @include('/documents/commons/form_edit')
        <button type="submit">確認</button>
        <button type="button" onclick="history.back()">キャンセル</button>
    </form>
@endsection
