<!-- env -->
@section('page_title', '新規会員登録')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'member';
?>

@extends('layouts.app')

@section('content')
@include('commons/flash')
<form action="{{ route('users.post')}}" method="post">
    @csrf
    <p>
        <label>
            名前<br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
    </p>
    <p>
        <label>
            住所<br>
            <input type="text" name="address" value="{{ old('address') }}">
        </label>
    </p>
    <p>
        <label>
            電話番号<br>
            <input type="text" name="tel" value="{{ old('tel') }}">
        </label>
    </p>
    <p>
        <label>
            メールアドレス<br>
            <input type="text" name="mail" value="{{ old('mail') }}">
        </label>
    </p>
    <p>
        <label>
            生年月日<br>
            <input type="date" name="birth" value="{{ old('birth') }}">
        </label>
    </p>
    <p>
    
    <p>
        <input class="btn btn-primary" type="submit" value="送信"/>       
    </p>

    <p>
        または
    </p>

    <p>
        <a href="{{ route('users.create') }}">キャンセル</a>
    </p>
</form>
@endsection