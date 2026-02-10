<div>
    <h1>Hello</h1>
    {{-- {{ print_r($data) }} print_r() - PHP function jo array/object ko readable format mein dikhata hai --}}

    <table border="1">
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>batch</th>
            @foreach ($data as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->batch }}</td>

        </tr>
        @endforeach
        </tr>
    </table>
</div>
