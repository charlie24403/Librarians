<!-- env -->
@section('page_title', '予約詳細')
<?php
    $IS_MENU = FALSE;
    $CATEGORY = 'reservations';
?>

<!-- layout -->
@extends('layouts.app')

<!-- content -->
@section('content')
<h1>予約詳細画面</h1>
<a href="{{ route('reservations.index') }}">検索結果画面に戻る</a>

<p>予約ID</p>
{{ $reservations->id }}
<p>会員ID</p>
{{ $reservations->user_id }}
<p>会員名</p>
<!--ユーザーのFKでユーザー名をひいてくる-->
<p>書籍名</p>
<!--ドキュメントのFKで書籍名をひいてくる-->
<p>ISBN番号</p>
{{ $reservations->isbn }}
<p>確保済み資料</p>
{{ $reservations->document_id }}
<p>予約年月日</p>
{{ $reservations->created_at }}

<hr>
<button type="button">変更</button>

<a href="#" onclick="deleteReservation()">削除</a>
<form action="{{  route('reservations.destroy', $reservations) }}" method ="post"
    id ="delete-form">
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