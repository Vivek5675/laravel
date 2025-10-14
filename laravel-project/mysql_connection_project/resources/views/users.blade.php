<div align="center">
    <h1>Users List</h1>
    <table border="1" style="background-color: yellowgreen; color: blue;">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>
