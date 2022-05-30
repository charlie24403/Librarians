<div class="data-detail">
    @csrf
    <dl>
        <dt>ISBN番号</dt>
        <dd>
            {{ $form_data["isbn"] }}
        </dd>

        <dt>資料名</dt>
        <dd>
            {{ $form_data["title"] }}
        </dd>

        <dt>分類コード</dt>
        <dd>
            {{ $categories[$form_data["category_id"]]->name }}
        </dd>

        <dt>著者名</dt>
        <dd>
            {{ $form_data["author"] }}
        </dd>

        <dt>出版社名</dt>
        <dd>
            {{ $form_data["publisher"] }}
        </dd>

        <dt>出版日</dt>
        <dd>
            {{ $form_data["published"] }}
        </dd>
    </dl>
</div>
