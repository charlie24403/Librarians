<table border="1">
    <thead>
        <tr>
        <th>予約ID</th>
        <th>会員ID</th>
        <th>ISBN番号</th>
        <th>確保済み資料</th>
        <th>予約年月日</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reserv)
            <tr>
            <td>{{ $reserv->id }}</td>
            <td>{{ $reserv->user_id }}</td>
            <td>{{ $reserv->isbn }}</td>
            <td>{{ $reserv->document_id }}</td>
            <td>{{ $reserv->created_at }}</td>
            <td>
                <a href="{{ route('reservations.show', $reserv->id) }}"><button type="button">詳細</button></a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $reservations->links() }}