<div>
    <h1>Users list</h1>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    {{ print_r($users) }}

    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
            </tr>
        @endforeach
    </table>
</div>
