<div>
    <h1>View/List Student Page</h1><br>

    <h3><a href="add">Add Student</a></h3>

    <form action="search" method="get">
        <input type="text" name="search" placeholder="Search by Name" value="{{@$search}}">
        <button>Search</button>
    </form>

    <form action="delete-multi" method="post">
        @csrf
        <button class="btndel"> Delete </button>

        <div>
        <!-- message banner -->
        @if(session('success'))
        <div style="color: green;">
            {{session('success')}}
        </div>
        @endif

        @if(session('error'))
        <div style="color: red;">
            {{session('error')}}
        </div>
        @endif
    </div>

        <table border="2" style="margin: 10px;">
            <tr>
                <th>selection</th>
                <th style=" min-width: 50px;">Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created At</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($data as $values)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$values->id}}"></td>
                <td>{{$values->id}}</td>
                <td>{{$values->name}}</td>
                <td>{{$values->email}}</td>
                <td>{{$values->phone}}</td>
                <td>{{$values->created_at}}</td>
                <td>
                    <a href="{{'edit/'.$values->id}}">Edit</a>
                    <a href="{{'delete/'.$values->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </form>
    <br>
    {{$data->links()}}
</div>

<style>
    .w-5.h-5 {
        width: 25px;
    }

    .btndel {
        background-color: #ba0808ce;
        color: #390307ff;
        margin: 10px;
        margin-bottom: 5px;
        padding: 5px;
        height: 30px;
        width: 100px;
    }
</style>