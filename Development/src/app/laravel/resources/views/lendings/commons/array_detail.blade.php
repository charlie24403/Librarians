@csrf
<dl>
    <dt>会員ID</dt>
    <dd>
        {{ $form_data["user_id"] }}
    </dd>

    <dt>資料ID</dt>
    <dd>
        {{ $form_data["document_id"] }}
    </dd>

    <dt>返却期日</dt>
    <dd>
        {{ $form_data["return_date"] }}
    </dd>
</dl>