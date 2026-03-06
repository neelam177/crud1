<div>
    <h1>Update Test</h1>
    <form action="/test-update/{{ $editData->id }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <input type="text" name="name" placeholder="Enter Name" value="{{ $editData->name }}" />
        <br><br>
        <input type="text" name="email" placeholder="Enter Email" value="{{ $editData->email }}" />
        <br><br>
        <input type="number" name="age" placeholder="Enter Age" value="{{ $editData->age }}" />
        <br><br>
        <input type="text" name="phone" placeholder="Enter Phone" value="{{ $editData->phone }}" />
        <br><br>
        <button>Update</button>
        <a href="/listTest">Cancel</a>
    </form>
</div>
{{-- {{ print_r($editData) }} --}}
