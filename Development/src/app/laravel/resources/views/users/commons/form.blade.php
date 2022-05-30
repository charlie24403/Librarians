<div class = "form">
    @csrf
    <dl>
        <dt>名前</dt>
        <dd><input type="text" name="name" value="{{ old('name') }}"></dd>
        <dt>住所</dt>
        <dd><input type="text" name="address" value="{{ old('address') }}"></dd>
        <dt>電話番号</dt>
        <dd><input type="number" name="tel" value="{{ old('tel') }}"></dd>
        <dt>メールアドレス</dt>
        <dd><input type="email" name="mail" value="{{ old('mail') }}"></dd>
        <dt>生年月日</dt>
        <dd><input type="date" name="birth" value="{{ old('birth') }}"></dd>
    </dl>
</div>
