<!-- env -->
@section('page_title', '在庫情報更新')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'stocks';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="input-page">
        @include('commons/flash')
        <form action="{{ route("stocks.confirm") }}" method="post">
            <input type="hidden" name="confirm_type" value="edit">
            <input type="hidden" name="stock_id" value="{{ $stock['id'] }}">

            @include('/stocks/commons/form_edit')
            <button type="submit" class="btn btn-outline-primary btn-lg">変更</button>
            <button type="button" class="btn btn-outline-secondary btn-lg" onclick="history.back()">キャンセル</button>
        </form>
    </div>
@endsection
