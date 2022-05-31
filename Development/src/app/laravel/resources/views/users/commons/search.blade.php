<div class = "form">
    @csrf
    <dl>
        <dt>名前</dt>
        <dd>
            <input style="width:200px;" class="form-control" type="text" name="name"
            value="{{ old('name') }}" placeholder="名前" maxlength="50">
        </dd>

        <dt>住所</dt>
        <dd>
            <input style="width:200px;" class="form-control" type="text" name="address"
            value="{{ old('address') }}" placeholder="住所" maxlength="200">
        </dd>

        <dt>電話番号</dt>
        <dd>
            <input style="width:200px;" class="form-control" type="text" name="tel"
            value="{{ old('tel') }}" placeholder="電話番号" maxlength="20">
        </dd>

        <dt>メールアドレス</dt>
        <dd>
            <input style="width:200px;" class="form-control" type="text" name="mail"
            value="{{ old('mail') }}">
        </dd>

        <dt>生年月日</dt>
        <dd>
            <input style="width:200px;" class="form-control" type="date" name="birth"
            value="{{ old('birth') }}">
        </dd>
    </dl>
</div>