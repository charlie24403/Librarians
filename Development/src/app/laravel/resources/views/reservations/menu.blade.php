<!-- env -->
@section('page_title', '予約管理メニュー')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'reservations';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <h1>予約メニュー</h1>
    <a href="">新規予約登録</a> <!--createか何か-->
    <a href="{{ route('reservations.search') }}" >検索</a>
@endsection
