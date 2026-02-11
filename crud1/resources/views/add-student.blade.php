<div>
    <h1>Add New Students</h1>
    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter name">
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <br>
        <input type="text" name="pass" placeholder="Enter Phone">
        <br>
        <br>
        <button>Submit</button>
    </form>
</div>
