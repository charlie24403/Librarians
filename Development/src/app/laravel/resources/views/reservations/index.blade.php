<!-- env -->
@section('page_title', '予約検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'reservations';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <button type="button" onclick="history.back()">再検索</button>
    @include('/reservations/commons/documents_datalist')
@endsection