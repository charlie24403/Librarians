@csrf
<dl>
    <dt>ISBN番号</dt>
    <dd>
        {{ $document->isbn }}
    </dd>

    <dt>資料名</dt>
    <dd>
        {{ $document->title }}
    </dd>

    <dt>分類コード</dt>
    <dd>
        {{ $document->category_id }}
    </dd>

    <dt>著者名</dt>
    <dd>
        {{ $document->author }}
    </dd>

    <dt>出版社名</dt>
    <dd>
        {{ $document->publisher }}
    </dd>

    <dt>出版日</dt>
    <dd>
        {{ $document->published }}
    </dd>
</dl>
