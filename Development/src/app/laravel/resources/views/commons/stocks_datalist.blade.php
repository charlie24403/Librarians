<table border="1">
    <thead>
        <tr>
        <th>在庫ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stocks as $stock)
            <tr>
            <td>{{ $stock->id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $stocks->appends(Request::all())->links() }}
