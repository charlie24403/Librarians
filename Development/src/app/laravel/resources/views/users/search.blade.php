<!-- env -->
@section('page_title', '会員検索')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
<div class = "input-page">
    <form action="{{ route('users.index') }}" method="get">
        @include('users/commons/search')
        <button type="submit" class="btn btn-outline-primary btn-lg">検索</button>
        <a href="{{ route('users.search') }}">
            <button type="button" class="btn btn-outline-secondary btn-lg">キャンセル</button>
        </a>
    </form>
</div>
@endsection
