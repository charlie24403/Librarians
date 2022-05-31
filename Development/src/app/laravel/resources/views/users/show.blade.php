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
        <button type="button" class="btn btn-outline-secondary btn-lg">検索に戻る</button>
    </a>

    @include('users/commons/data_detail')
    <a href="{{ route('users.edit', $user->id) }}">
        <button type="button" class="btn btn-outline-primary btn-lg">変更</button>
    </a>

    <button type="button" class="btn btn-outline-primary btn-lg" onclick="deleteuser()">削除</button>

    <form action="{{  route('users.destroy', $user) }}" method ="post"
    id ="delete-form">
    @csrf
    @method('delete')
    </form>

    <?php
        if (isset($edited)) {
            echo '<script type="text/javascript">alert("編集が完了しました");</script> ';
        }
    ?>

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
