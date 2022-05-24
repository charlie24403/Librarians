<dl>
    <dt>ISBN番号</dt>
    <dd>
        <input type="number" name="isbn"
        value="{{ request('isbn') }}" placeholder="ISBN番号">
    </dd>

    <dt>資料名</dt>
    <dd>
        <input type="number" name="title"
        value="{{ request('title') }}" placeholder="資料名">
    </dd>

    <dt>分類コード</dt>
    <dd>
        <select name="category_id">
        <option value=""></option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}"

        {{ request('category_id') == $category->id ? 'selected' : ''}}
        >

        {{ $category->name }}({{ $category->products_count }})
        </option>
        @endforeach
        </select>
    </dd>

    <dt>著者名</dt>
    <dd>
        <input type="text" name="author"
        value="{{ request('author') }}" placeholder="著者名">
    </dd>

    <dt>出版社名</dt>
    <dd>
        <input type="text" name="publisher"
        value="{{ request('publisher') }}" placeholder="出版社名">
    </dd>

    <dt>出版日</dt>
    <dd>
        <input type="date" name="published"
        value="{{ request('published') }}">
    </dd>
</dl>
