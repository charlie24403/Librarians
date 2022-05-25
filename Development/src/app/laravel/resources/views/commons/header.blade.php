@csrf
<dl>
    <dt>ISBN番号</dt>
    <dd>
        <input type="number" name="isbn"
        value="{{ old('isbn') }}" placeholder="ISBN番号"maxlength="13">
    </dd>

    <dt>会員ID</dt>
    <dd>
        <input type="number" name="user_id"
        value="{{ old('user_id') }}" placeholder="会員ID" maxlength="1000">
    </dd>

</dl>