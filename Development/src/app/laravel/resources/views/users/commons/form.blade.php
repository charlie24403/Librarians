@csrf
<p>
    <label>
        名前<br>
        <input type="text" name="name" value="{{ old('name') }}">
    </label>
</p>
<p>
    <label>
        住所<br>
        <input type="text" name="address" value="{{ old('address') }}">
    </label>
</p>
<p>
    <label>
        電話番号<br>
        <input type="number" name="tel" value="{{ old('tel') }}">
    </label>
</p>
<p>
    <label>
        メールアドレス<br>
        <input type="email" name="mail" value="{{ old('mail') }}">
    </label>
</p>
<p>
    <label>
        生年月日<br>
        <input type="date" name="birth" value="{{ old('birth') }}">
    </label>
</p>