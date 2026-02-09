<div>
    <h1>Hello</h1>
    {{-- {{ print_r($data) }} --}}
    <!-- He who is contented is rich. - Laozi -->
    <table border="1">
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>batch</td>
            @foreach($data as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
            </tr>
            @endforeach
        </tr>
    </table>
</div>
