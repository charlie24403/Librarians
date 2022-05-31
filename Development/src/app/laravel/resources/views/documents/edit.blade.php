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
    <div class="input-page">
        @include('commons/flash')
        <form action="{{ route("documents.confirm") }}" method="post">
            <input type="hidden" name="confirm_type" value="edit">
            <input type="hidden" name="document_id" value="{{ $document['id'] }}">

            @include('/documents/commons/form_edit')
            <button type="submit" class="btn btn-outline-primary btn-lg">確認</button>
            <button type="button" class="btn btn-outline-secondary btn-lg" onclick="history.back()">キャンセル</button>
        </form>
    </div>
@endsection
