<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約管理メニュー画面</title>
</head>
<body>
    <a href="">topに戻る</a>
    <h1>予約メニュー</h1>
    <a href="">新規予約登録</a> <!--createか何か-->
    <a href="" >検索</a>

    @foreach($reservations as $reserv)
    <p>
        <a href="{{ route('reservations.show', $reserv->id) }}">{{ $reserv->id }}</a>
    </p>
    @endforeach

</body>
</html>

{{-- {{ route('reservations.show' ,$reservations->id) }} --}}
