<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約情報画面</title>
</head>
<body>
<a href="">Topに戻る</a>
<a href="">予約メニュー画面に戻る</a>
<h1>予約詳細画面</h1>
<a href="">検索結果画面に戻る</a>

<p>予約ID</p>
{{ $reservations -> id }}
<p>会員ID</p>
{{ $reservations -> user_id }}
<p>会員名</p>
<!--ユーザーのFKでユーザー名をひいてくる-->
<p>書籍名</p>
<!--ドキュメントのFKで書籍名をひいてくる-->
<p>ISBN番号</p>
{{ $reservations -> isbn }} <!--リンク化するかどうか-->
<p>確保済み資料</p>
{{ $reservations -> document_id }}
<p>予約年月日</p>
{{ $reservations -> created_at }}

<hr>
<input type="submit" value ="変更">
<form action="" method ="POST">
    @csrf
    <!--もしpost送信以外ならあっと以下で指定-->
    <input type="submit" value ="削除">
</form>

</body>
</html>