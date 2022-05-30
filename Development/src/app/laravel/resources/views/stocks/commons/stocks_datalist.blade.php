<div class="data-list">
    <table border="1">
        <thead>
            <tr>
                <th>在庫ID</th>
                <th>資料ID</th>
                <th>入荷年月日</th>
                <th>廃棄年月日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stocks as $stock)
                <tr>
                    <td>{{ $stock->id }}</td>
                    <td>{{ $stock->document_id }}</td>
                    <td>{{ $stock->created_at }}</td>
                    <td>{{ $stock->disposal }}</td>
                    <td>
                        <a href="{{ route('stocks.show', $stock->id) }}"><button type="button">詳細</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $stocks->appends(Request::all())->links() }}
</div>
