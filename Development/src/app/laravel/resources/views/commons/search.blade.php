<dl>
    <dt>ISBN番号</dt>
    <dd>
        <input type="number" name="isbn"
        value="" placeholder="ISBN番号">
    </dd>

    <dt>資料名</dt>
    <dd>
        <input type="text" name="title"
        value="" placeholder="資料名" maxlength="20">
    </dd>

    <dt>分類コード</dt>
    <dd>
        <select name="category_id">
        <option value="">未選択</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
        </select>
    </dd>

    <dt>著者名</dt>
    <dd>
        <input type="text" name="author"
        value="" placeholder="著者名" maxlength="20">
    </dd>

    <dt>出版社名</dt>
    <dd>
        <input type="text" name="publisher"
        value="" placeholder="出版社名" maxlength="20">
    </dd>

    <dt>出版日</dt>
    <dd>
        <input type="date" name="published"
        value="">
    </dd>
</dl>
