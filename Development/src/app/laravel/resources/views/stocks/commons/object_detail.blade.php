<div class = "data-detail">
    @csrf
    <dl>
        <dt>在庫ID</dt>
        <dd>
            {{ $stock["id"]}}
        </dd>

        <dt>資料ID</dt>
        <dd>
            {{ $stock["document_id"]}}
        </dd>

        <dt>入荷年月日</dt>
        <dd>
            {{ $stock["created_at"]}}
        </dd>

        <dt>廃棄年月日</dt>
        <dd>
            {{ $stock["disposal"]}}
        </dd>
    </dl>
</div>