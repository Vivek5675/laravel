<div>
    <h1>Profile Page</h1>

    @if(session('user'))
        <h2>Welcome,{{session('user')}}</h2>
    @else
        <h3>No user found in session <a href="login">Login</a> </h3>
    @endif

    <a href="logout">Logout</a>
    <br><br><br>

    {{print_r(session('allData'))}}
    <br>
    user is: {{session('allData')['user']}}
    <br>
    password is: {{session('allData')['password']}}
</div>
