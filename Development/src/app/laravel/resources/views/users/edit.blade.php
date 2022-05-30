<!-- env -->
@section('page_title', '更新情報入力')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
<div class = "input-page">
@include('commons/flash')
<form action="{{ route('users.update_post', $user->id)}}" method="post">
    @csrf
    @include('users.commons.form')

    <button type="submit" class="btn btn-primary">更新</button>

    <a href="{{ route('users.show', $user->id) }}">
            <button type="button">キャンセル</button>
    </a>
</form>
</div>
