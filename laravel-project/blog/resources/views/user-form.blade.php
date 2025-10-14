<div>
    <h2>Add New User</h2>

    <!-- {{print_r($errors)}} -->
    <!-- @if($errors->any())
        @foreach($errors->all() as $error)
            <div style="color: red;">
                {{$error}}
            </div>
        @endforeach
    @endif -->

    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input  type="text" name="username" placeholder="Enter User Name" value="{{old('username')}}" id="" class="{{$errors->first('username')?'input-error':''}}">
            <!-- value is given for value as it in input box -->
            <span style="color: red;">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" placeholder="Enter User Email" value="{{old('email')}}" id="" class="{{$errors->first('email')?'input-error':''}}">
            <span style="color: red;">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" placeholder="Enter User City" value="{{old('city')}}" id="" class="{{$errors->first('city')?'input-error':''}}">
            <span style="color: red;">@error('city'){{$message}}@enderror</span>
        </div>

        <div>
            <label for=""><b>Skill:</b></label>
            <br>

            <input class="skill-input" type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input class="skill-input" type="checkbox" name="skill[]" value="PYTHON" id="python">
            <label for="python">PYTHON</label>
            <input class="skill-input" type="checkbox" name="skill[]" value="JAVA" id="java">
            <label for="java">JAVA</label>
            <span style="color: red;">@error('skill'){{$message}}@enderror</span>
        </div>

        <div class="input-wrapper">
           <button type="submit">Add new user</button>
        </div>
    </form>
</div>

<style>
    input{
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
    }

    button{
        border: green 3px solid;
        height: 35px;
        width: 100px;
        border-radius: 2px;
        background-color: blanchedalmond;
        cursor: pointer;
    }

    .input-wrapper{
        margin: 10px;
    }

    .skill-input{
        border: orange 1px solid;
        height: 20px;
        width: 20px;
        border-radius: 2px;
        color: orange;
    }

    .input-error{
        border: 1px solid red;
        color: red;
    }
</style>