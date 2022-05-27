@section('page_title', '在庫詳細')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'stocks';
?>

<!-- content -->
@extends('layouts.app')

@section('content')
    @if(isset($edited))
        <a href="{{ route('stocks.search')}}">
            <button type="button">検索に戻る</button>
        </a>
    @else
        <button type="button" onclick="history.back()">戻る</button>
    @endif

    @include('stocks/commons/object_detail')
    <a href="{{ route('stocks.edit', $stock->id) }}">
        <button type="button">編集</button>
    </a>
    <button type="button" onclick="deleteReservation()">削除</button>

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
@endsection