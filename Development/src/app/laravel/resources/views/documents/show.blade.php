@section('page_title', '資料詳細')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
<div class = "detail-page">
    <!-- @if(isset($edited))
        <a href="{{ route('documents.search')}}">
            <button type="button">検索に戻る</button>
        </a>
    @else
        <button type="button" onclick="history.back()">戻る</button>
    @endif -->
    <a href="{{ route('documents.search')}}">
        <button type="button" class="btn btn-outline-secondary btn-lg">検索に戻る</button>
    </a>

    @include('documents/commons/object_detail')
    <a href="{{ route('documents.edit', $document->id) }}">
        <button type="button" class="btn btn-outline-primary btn-lg">編集</button>
    </a>
    <button type="button" class="btn btn-outline-primary btn-lg"  onclick="deleteReservation()">削除</button>

    <form action="{{ route('documents.destroy', $document) }}" method ="post" id ="delete-form">
        @csrf
        @method('delete')
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
