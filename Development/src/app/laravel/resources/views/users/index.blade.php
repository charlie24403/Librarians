<!-- env -->
@section('page_title', '会員検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

<!-- content -->
@section('content')
    <button type="button" onclick="history.back()">再検索</button>
    @include('/commons/member_datalist')
@endsection