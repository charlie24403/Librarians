<!-- env -->
@section('page_title', '在庫検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'stocks';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="input-page">
        <form action="{{ route('stocks.index') }}" method="get">
                @include('/stocks/commons/form')
                <button type="submit">検索</button>
                <a href="{{ route('stocks.search') }}">
                    <button type="button">キャンセル</button>
                </a>
        </form>
    </div>
@endsection
