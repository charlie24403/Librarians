<div class="data-list">
    <table border="1">
        <thead>
            <tr>
                <th>貸出ID</th>
                <th>会員ID</th>
                <th>資料ID</th>
                <th>貸出日</th>
                <th>返却期日</th>
                <th>返却日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lendings as $lending)
                <tr>
                    <td>{{ $lending->id }}</td>
                    <td>{{ $lending->user_id }}</td>
                    <td>{{ $lending->document_id }}</td>
                    <td>{{ $lending->created_at }}</td>
                    <td>{{ $lending->return_date }}</td>
                    <td>{{ $lending->finishing_date }}</td>
                    <td>
                        <a href="{{ route('lendings.show', $lending->id) }}"><button type="button" class="btn btn-outline-secondary btn-lg">詳細</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $lendings->appends(Request::all())->links() }}
</div>
