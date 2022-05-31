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
    <div class="confirm-page">
        <form action="{{ route('lendings.store') }}" method="post">
            @include('lendings/commons/array_detail')
            <button type="submit" class="btn btn-outline-primary btn-lg" >確認</button>
            <button type="button" onclick="history.back()" class="btn btn-outline-secondary btn-lg">戻る</button>
        </form>
    </div>
@endsection
