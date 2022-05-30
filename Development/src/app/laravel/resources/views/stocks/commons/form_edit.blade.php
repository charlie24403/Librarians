<div class="form">
    @csrf
    <dl>
        <dt>資料ID</dt>
        <dd>
            <input type="number" name="document_id"
            value="{{ old('document_id') }}" placeholder="資料ID">
        </dd>
    </dl>
</div>
