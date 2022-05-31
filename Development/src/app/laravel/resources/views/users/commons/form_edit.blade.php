<div class = "form">
    @csrf
    <dl>
        <dt>名前</dt>
        <dd><input style="width:200px;" class="form-control" type="text" name="name" value="{{ $user['name'] }}"></dd>
        <dt>住所</dt>
        <dd><input style="width:200px;" class="form-control" type="text" name="address" value="{{ $user['address'] }}"></dd>
        <dt>電話番号</dt>
        <dd><input style="width:200px;" class="form-control" type="number" name="tel" value="{{ $user['tel'] }}"></dd>
        <dt>メールアドレス</dt>
        <dd><input style="width:200px;" class="form-control" type="email" name="mail" value="{{ $user['mail'] }}"></dd>
        <dt>生年月日</dt>
        <dd><input style="width:200px;" class="form-control" type="date" name="birth" value="{{ $user['birth'] }}"></dd>
    </dl>
</div>
