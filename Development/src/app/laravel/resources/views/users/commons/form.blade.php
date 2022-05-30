<div class = "form">
    
    <dl>
        <dt>名前</dt>
        <dd><input type="text" name="name" value="{{ $user['name'] }}"></dd>
        <dt>住所</dt>
        <dd><input type="text" name="address" value="{{ $user['address'] }}"></dd>
        <dt>電話番号</dt>
        <dd><input type="number" name="tel" value="{{ $user['tel'] }}"></dd>
        <dt>メールアドレス</dt>
        <dd><input type="email" name="mail" value="{{ $user['mail'] }}"></dd>
        <dt>生年月日</dt>
        <dd><input type="date" name="birth" value="{{ $user['birth'] }}"></dd>
    </dl>
</div>
