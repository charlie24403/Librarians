<!-- env -->
@section('page_title', '貸出検索結果')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="result-page">
        <button type="button" onclick="history.back()">再検索</button>
        @include('/lendings/commons/lendings_datalist')
    </div>
@endsection
