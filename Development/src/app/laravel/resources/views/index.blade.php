<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約メニュー画面</title>
</head>
<body>
    <a href="">topに戻る</a>
    <h1>予約メニュー</h1>
    <a href="">新規予約登録</a> <!--createか何か-->
    <a href="}}" >検索</a>

    <p>予約ID</p>
    {{ $reservations -> id }}
    <p>会員ID</p>
    {{ $reservations -> user_id }}
    <p>ISBN番号</p>
    {{ $reservations -> isbn }}
    <p>確保済み資料</p>
    {{ $reservations -> document_id }}
    <p>予約年月日</p>
    {{ $reservations -> created_at }}
</body>
</html>
