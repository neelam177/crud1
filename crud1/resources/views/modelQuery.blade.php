<div>
    {{-- {{ $user }} --}}
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach ($user as $users)
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->phone }}</td>

            </tr>
        @endforeach
    </table>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
