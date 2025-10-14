<div>
    <h1>Edit Page</h1>

    <form action="/edit-student/{{$studata->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{$studata->name}}" placeholder="Enter Name">
        <br><br>
        <input type="text" name="email" value="{{$studata->email}}" placeholder="Enter Email">
        <br><br>
        <input type="text" name="phone" value="{{$studata->phone}}" placeholder="Enter Phone">
        <br><br>
        <button>Update Data</button>
        <a href="/list">Cancel</a>
    </form>
</div>
