<div>
    {{-- {{ $query }} --}}

    <table border="1">
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>phone</th>
        </tr>
        @foreach ($query as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
            </tr>
        @endforeach
    </table>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
