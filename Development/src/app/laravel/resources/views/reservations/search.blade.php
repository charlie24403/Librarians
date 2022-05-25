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
    <form action="{{ route('reservations.index') }}" method="get">
        @include('/commons/search')
        <button type="submit">検索</button>
        <a href="{{ route('reservations.search') }}">
            <button type="button">キャンセル</button>
        </a>
    </form>
@endsection
