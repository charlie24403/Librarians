<!-- env -->
@section('page_title', '貸出登録確認')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'lendings';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <form action="{{ route('lendings.store') }}" method="post">
        @include('lendings/commons/array_detail')
        <button type="submit">確認</button>
        <button type="button" onclick="history.back()">戻る</button>
    </form>
@endsection