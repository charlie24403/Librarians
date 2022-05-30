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
    <div class="input-form">
        @include('commons/flash')
        <form action="{{ route("stocks.confirm") }}" method="post">
            <input type="hidden" name="confirm_type" value="edit">
            <input type="hidden" name="stock_id" value="{{ $stock['id'] }}">

            @include('/stocks/commons/form_edit')
            <button type="submit">変更</button>
            <button type="button" onclick="history.back()">キャンセル</button>
        </form>
    </div>
@endsection
