<div class="form">
    @csrf
    <dl>
        <dt>ISBN番号</dt>
        <dd>
            <input type="number" name="isbn"
            value="{{ old('isbn') }}" placeholder="ISBN番号" class="form-control" id="exampleFormControlInput1" style="width: 200px">
        </dd>

        <dt>資料名</dt>
        <dd>
            <input type="text" name="title"
            value="{{ old('title') }}" placeholder="資料名" maxlength="20" class="form-control" id="exampleFormControlInput1" style="width: 200px">
        </dd>

        <dt>分類コード</dt>
        <dd>
            <select name="category_id" class="form-select" style="width: 200px">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == old('category') ? 'selected' : ''}}>
                    {{ $category->name }}
                </option>
            @endforeach
            <option value="" selected>未選択</option>
            </select>
        </dd>

        <dt>著者名</dt>
        <dd>
            <input type="text" name="author"
            value="{{ old('author') }}" placeholder="著者名" maxlength="20" class="form-control" id="exampleFormControlInput1" style="width: 200px">
        </dd>

        <dt>出版社名</dt>
        <dd>
            <input type="text" name="publisher"
            value="{{ old('publisher') }}" placeholder="出版社名" maxlength="20"class="form-control" id="exampleFormControlInput1" style="width: 200px" >
        </dd>

        <dt>出版日</dt>
        <dd>
            <input type="date" name="published"
            value="{{ old('published') }}" class="form-control" id="exampleFormControlInput1" style="width: 200px">
        </dd>
    </dl>
</div>
