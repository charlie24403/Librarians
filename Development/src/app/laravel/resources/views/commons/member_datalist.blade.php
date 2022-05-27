<table border="1">
    <thead>
        <tr>
        <th>会員ID</th>
        <th>名前</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>メールアドレス</th>
        <th>生年月日</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->tel }}</td>
            <td>{{ $user->mail }}</td>
            <td>{{ $user->birth }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}"><button type="button">詳細</button></a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $users->appends(Request::all())->links() }}