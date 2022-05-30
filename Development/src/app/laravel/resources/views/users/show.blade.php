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
    <a href="{{ route('users.search')}}">
        <button type="button">検索に戻る</button>
    </a>

    @include('users/commons/data_detail')
    <a href="{{ route('users.edit', $user->id) }}">
        <button type="button">変更</button>
    </a>

    <button type="button" onclick="deleteuser()">削除</button>

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


</div>
@endsection
