<!-- env -->
@section('page_title', '会員検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

<!-- content -->
@section('content')
<div class = "result-page">
    <button type="button" class="btn btn-outline-secondary btn-lg" onclick="history.back()">再検索</button>
    @include('/commons/member_datalist')
</div>
@endsection
