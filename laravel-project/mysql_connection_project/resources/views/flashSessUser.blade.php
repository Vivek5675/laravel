<div>
    <h1>Flash Session User Page</h1>

    <h5 style="color: green;">
        {{session('message')}}
    </h5>
    <h5 style="color: green;">
        {{session('name')}}
    </h5>
    
    <!-- keep function to keep name is that. not clear after the refresh -->

   
     <!-- reflash function is flash seesion refresh every time when user refresh the page and keep the session on/start. -->

    <form action="/add" method="post">
        @csrf
        <input type="text" name="user" placeholder="Enter Name">
        <br><br>
        <input type="text" name="email" placeholder="Enter Email">
        <br><br>
        <input type="text" name="phone" placeholder="Enter Phone">
        <br><br>
        <button>Add New User</button>
    </form>
</div>
