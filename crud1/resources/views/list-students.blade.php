<div>
    {{-- {{ print_r($students) }} --}}
    <h1>Students Data</h1>
    <form action="search" method="get">
        @csrf
        <input type="text" placeholder="Search with name" name="search" value="{{ @$search }}" />
        <button>Search</button>
    </form>
    <form action="delete-multi" method="post">
        @csrf
        <button>Delete</button>
        <table border="1">
            <tr>
                <th>Selection</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Operation</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td><input type="checkbox" name="ids[]" value="{{ $student->id }}" /></td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td><a href="{{ 'delete/' . $student->id }}">Delete</a>
                        <a href="{{ 'edit/' . $student->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </form>
    <br>
    <br>
    {{ $students->links() }}
</div>

<style>
    .w-5.h-5 {
        width: 20px;
    }
</style>
