<div>
    <h1>User Form</h1>

    <form action="/getuser" method="post">
        <!-- value is PUT,PATCH,DELETE used here for this method call -->
        <!-- <input type="hidden" name="_method" value="DELETE">  -->
        @csrf
        <input type="text" name="user" placeholder="Enter name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <br>
        <button>submit</button>
    </form>
</div>