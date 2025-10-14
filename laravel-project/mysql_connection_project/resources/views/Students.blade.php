<div align="center">
    <h1>Students List</h1>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->batch}}</td>
        </tr>
        @endforeach
    </table>
</div>
