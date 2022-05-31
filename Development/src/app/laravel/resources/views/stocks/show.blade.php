@section('page_title', '在庫詳細')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'stocks';
?>

<!-- content -->
@extends('layouts.app')

@section('content')
<div class = "detail-page">
    <!-- @if(isset($edited))
        <a href="{{ route('stocks.search')}}">
            <button type="button">検索に戻る</button>
        </a>
    @else
        <button type="button" onclick="history.back()">戻る</button>
    @endif -->
    <a href="{{ route('stocks.search')}}">
        <button type="button" class="btn btn-outline-secondary btn-lg">検索に戻る</button>
    </a>

    @include('stocks/commons/object_detail')
    <a href="{{ route('stocks.edit', $stock->id) }}">
        <button type="button" class="btn btn-outline-primary btn-lg">編集</button>
    </a>
    <button type="button" class="btn btn-outline-primary btn-lg" onclick="deleteReservation()">削除</button>

    <form action="{{ route('stocks.waste', $stock->id) }}" method ="post" id ="delete-form">
        @method('patch')
        @csrf
    </form>


    <?php
        if (isset($edited)) {
            echo '<script type="text/javascript">alert("編集が完了しました");</script> ';
        }
    ?>

    <script type="text/javascript">
        function deleteReservation()
        {
            event.preventDefault();
            if (window.confirm('削除しますか？')){

                document.getElementById('delete-form').submit();
            }
        }
    </script>
</div>
@endsection
