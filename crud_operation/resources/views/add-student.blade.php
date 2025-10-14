<div>
    <h1>Insert Student Page</h1>

    <form action="" method="post">
        @csrf
        
        @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <input type="text" name="name" placeholder="Enter Name" value="{{ old('name') }}">
        <br><br>
        <input type="text" name="email" placeholder="Enter Email" value="{{ old('email') }}">
        <br><br>
        <input type="text" name="phone" placeholder="Enter Phone" value="{{ old('phone') }}">
        <br><br>
        <button>Add Student</button>
    </form>
</div>