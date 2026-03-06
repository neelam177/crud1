<div class="p-5">
    <form action="{{ url('test-add') }}" method="post">
        @csrf
        <label for="name" class="text-[20px]">Name:</label>
        <input type="text" name="name" placeholder="Enter your name"><br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="" placeholder="Enter your Email"><br><br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" placeholder="Enter your phone"><br><br>
        <label for="age">Age</label>
        <input type="number" name="age" placeholder="Enter your age"><br><br>
        <button type="submit">Submit</button>

    </form>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
