<!-- env -->
@section('page_title', '更新情報入力')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

@section('content')
@include('commons/flash')
<form action="{{ route('users.update_post', $user->id)}}" method="post">  
    @include('users/commons/form')
    <p>
        <input class="btn btn-primary" type="submit" value="登録"/>    
    </p>

    <p>
        または
    </p>

    <p>
        <a href="{{ route('users.show', $user->id) }}">
            <button type="button">キャンセル</button>
        </a>
    </p>
</form>
@endsection