@csrf
<dl>
    <dt>資料ID</dt>
    <dd>
        {{ $form_data["document_id"]}}
    </dd>
    <dt>ISBN番号</dt>
    <dd>
        {{ $documents["isbn"]}}
    </dd>
    <dt>分類コード</dt>
    <dd>
        {{ $documents["category_id"]}}
    </dd>
    <dt>著者名</dt>
    <dd>
        {{ $documents["author"]}}
    </dd>
    <dt>出版社名</dt>
    <dd>
        {{ $documents["publisher"]}}
    </dd>
    <dt>出版日</dt>
    <dd>
        {{ $documents["published"]}}
    </dd>
</dl>
