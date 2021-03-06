<!-- env -->
@section('page_title', '在庫登録確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'stocks';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="confirm-page">
        @if($confirm_type == "edit")
            <form action="{{ route("stocks.update", $stock_id) }}" method="post">
                @method('patch')
        @elseif($confirm_type == 'create')
            <form action="{{ route("stocks.store") }}" method="post">
        @endif
            @include('stocks/commons/array_detail')
            <button type="submit" class="btn btn-outline-primary btn-lg">登録</button>
            <button type="button" class="btn btn-outline-secondary btn-lg" onclick="history.back()">戻る</button>
        </form>
    </div>
@endsection
