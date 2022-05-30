<!-- env -->
@section('page_title', '会員情報詳細')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'user';
?>

@extends('layouts.app')

<!-- content -->
@section('content')
<div class = "detail-page">
    @include('users/commons/data_detail')
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
</div>
@endsection