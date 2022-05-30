<div class="data-list">
    <table border="1">
        <thead>
            <tr>
                <th>資料ID</th>
                <th>ISBN番号</th>
                <th>資料名</th>
                <th>分類コード</th>
                <th>著者名</th>
                <th>出版社名</th>
                <th>出版日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->id }}</td>
                    <td>{{ $document->isbn }}</td>
                    <td>{{ $document->title }}</td>
                    <td>{{ $document->category->name }}</td>
                    <td>{{ $document->author }}</td>
                    <td>{{ $document->publisher }}</td>
                    <td>{{ $document->published }}</td>
                    <td>
                        <a href="{{ route('documents.show', $document->id) }}"><button type="button">詳細</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $documents->appends(Request::all())->links() }}
</div>
