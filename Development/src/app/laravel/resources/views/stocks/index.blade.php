<!-- env -->
@section('page_title', '在庫検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="result-page">
        <button type="button" class="btn btn-outline-secondary btn-lg" onclick="history.back()">再検索</button>
        @include('stocks.commons.stocks_datalist')
    </div>
@endsection
