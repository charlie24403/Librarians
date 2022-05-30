<!-- env -->
@section('page_title', '会員検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

<!-- content -->
@section('content')
    @include('/commons/member_datalist')
@endsection