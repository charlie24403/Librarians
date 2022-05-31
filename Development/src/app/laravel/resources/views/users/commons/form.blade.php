<div class = "form">
    @csrf
    <dl>
        <dt>名前</dt>
        <dd><input style="width:200px;" type="text" class="form-control" name="name" value="{{ old('name') }}"></dd>
        <dt>住所</dt>
        <dd><input style="width:200px;" type="text" class="form-control" name="address" value="{{ old('address') }}"></dd>
        <dt>電話番号</dt>
        <dd><input style="width:200px;" type="number" class="form-control" name="tel" value="{{ old('tel') }}"></dd>
        <dt>メールアドレス</dt>
        <dd><input style="width:200px;" type="email" class="form-control" name="mail" value="{{ old('mail') }}"></dd>
        <dt>生年月日</dt>
        <dd><input style="width:200px;" type="date" class="form-control" name="birth" value="{{ old('birth') }}"></dd>
    </dl>
</div>
