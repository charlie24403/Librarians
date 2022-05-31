<div class="form">
    @csrf
    <dl>
        <dt>会員ID</dt>
        <dd>
            <input type="number" name="user_id"
            value="{{ old('user_id') }}" placeholder="会員番号" class="form-control" id="exampleFormControlInput1" style="width: 200px">
        </dd>

        <dt>資料ID</dt>
        <dd>
            <input type="number" name="document_id"
            value="{{ old('document_id') }}" placeholder="資料ID" class="form-control" id="exampleFormControlInput1" style="width: 200px" >
        </dd>

        <dt>返却期日</dt>
        <dd>
            <input type="date" name="return_date"
            value="{{ old('return_date') }}" class="form-control" id="exampleFormControlInput1" style="width: 200px" >
        </dd>
    </dl>
</div>
