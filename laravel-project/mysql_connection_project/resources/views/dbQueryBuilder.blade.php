<div>
    <h1>DataBase Query Builder</h1>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach($querydata as $query)
        <tr>
            <td>{{$query->id}}</td>
            <td>{{$query->name}}</td>
            <td>{{$query->email}}</td>
            <td>{{$query->phone}}</td>
        </tr>
        @endforeach
    </table>
</div>