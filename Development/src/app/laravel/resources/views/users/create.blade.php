<!-- env -->
@section('page_title', '新規会員登録')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

@section('content')
@include('commons/flash')
<form action="{{ route('users.post')}}" method="post">
    @include('users/commons/form')
    
    <p>
        <input class="btn btn-primary" type="submit" value="登録"/>       
    </p>

    <p>
        または
    </p>

    <a href="{{ route('users.create') }}">
        <button type="button">キャンセル</button>
    </a>
</form>
@endsection