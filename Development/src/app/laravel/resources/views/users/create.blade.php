<!-- env -->
@section('page_title', '新規会員登録')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    <div class="input-page">
        @include('commons/flash')
        <form action="{{ route('users.post')}}" method="post">
            @include('users/commons/form')
            <button type="submit">登録</button>
            <a href="{{ route('users.create') }}">
                <button type="button">キャンセル</button>
            </a>
        </form>
    </div>
@endsection
