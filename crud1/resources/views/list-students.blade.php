<div>
    {{-- {{ print_r($students) }} --}}
    <h1>Students Data</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Operation</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td><a href="{{ 'delete/' . $student->id }}">Delete</a>
                    <a href="{{ 'edit/' . $student->id }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <!-- We must ship. - Taylor Otwell -->
</div>
