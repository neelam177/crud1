<div>
    <h1>Test Data</h1>
    <div class="px-4 py-2 bg-blue-500">
        <a href="/test-add" class="btn btn-primary">Create</a>
    </div>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Operation</th>
        </tr>
        @foreach ($data as $test)
            <tr>
                <td>{{ $test->name }}</td>
                <td>{{ $test->email }}</td>
                <td>{{ $test->age }}</td>
                <th>
                    <a href="{{ 'test-edit/' . $test->id }}">Edit</a>
                    <a href="{{ 'delete-test/' . $test->id }}" onclick="return confirm('Are you sure?')">Delete</a>
                </th>
            </tr>
        @endforeach
    </table>
</div>
