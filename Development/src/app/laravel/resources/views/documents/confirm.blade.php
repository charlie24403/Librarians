<!-- env -->
@section('page_title', '資料登録確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="confirm-page">
        @if($confirm_type == "edit")
            <form action="{{ route("documents.update", $document_id) }}" method="post">
                @method('patch')
        @elseif($confirm_type == 'create')
            <form action="{{ route("documents.store") }}" method="post">
        @endif
            @include('documents/commons/array_detail')
            <button type="submit" class="btn btn-outline-primary btn-lg">確認</button>
            <button type="button" class="btn btn-outline-secondary btn-lg" onclick="history.back()">戻る</button>
        </form>
    </div>
@endsection
