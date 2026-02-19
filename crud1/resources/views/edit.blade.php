<div>
    <h1>Update Student</h1>
    <form action="/edit-student/{{ $data->id }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <input type="text" name="name" placeholder="Enter Name" value="{{ $data->name }}" />
        <br><br>
        <input type="text" name="email" placeholder="Enter Email" value="{{ $data->email }}" />
        <br><br>
        <input type="text" name="phone" placeholder="Enter Phone" value="{{ $data->phone }}" />
        <br><br>
        <button>Update</button>
        <a href="/list">Cancel</a>
    </form>
</div>
