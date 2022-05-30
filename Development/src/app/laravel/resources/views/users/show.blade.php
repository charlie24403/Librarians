<!-- env -->
@section('page_title', '会員情報詳細')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

<!-- content -->
@section('content')
    <dl>
        <dt>会員ID</dt>
        <dd>{{ $user->id }}</dd>
        <dt>名前</dt>
        <dd>{{ $user->name }}</dd>
        <dt>住所</dt>
        <dd>{{ $user->address }}</dd>
        <dt>電話番号</dt>
        <dd>{{ $user->tel }}</dd>
        <dt>メールアドレス</dt>
        <dd>{{ $user->mail }}</dd>
        <dt>生年月日</dt>
        <dd>{{ $user->birth }}</dd>
    </dl>
    <p>
        <a href="{{ route('users.edit', $user->id) }}">
            <button type="button">変更</button>
        </a>
    </p>

    <a href="#" onclick="deleteuser()">
        <button type="button">削除</button>
    </a>
    <form action="{{  route('users.destroy', $user) }}" method ="post"
    id ="delete-form">
    @csrf
    @method('delete')
    </form>

    <script type="text/javascript">
    function deleteuser()
    {
        event.preventDefault();
        if (window.confirm('削除しますか？')){
            document.getElementById('delete-form').submit();
        }
    }
    </script>

    <a href="{{ route('users.index')}}">
        <button type="button">会員一覧に戻る</button>
    </a>
@endsection