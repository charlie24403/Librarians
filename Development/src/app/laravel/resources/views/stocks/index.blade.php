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
    <button type="button" onclick="history.back()">再検索</button>
    @include('stocks.commons.stocks_datalist')
@endsection
