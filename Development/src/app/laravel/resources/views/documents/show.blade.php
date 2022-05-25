@section('page_title', '資料詳細')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'documents';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
    @include('documents/commons/object_detail')
    <a href="">
        <button type="button">編集</button>
    </a>
    <a href="">
        <button type="button" onclick="deleteReservation()">削除</button>
    </a>

    <form action="{{ route('documents.destroy', $document) }}" method ="post" id ="delete-form">
        @csrf
        @method('delete')
    </form>
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
