<div>
    <h1>User Form 2 </h1>

    <form action="addinfo" method="post">
        @csrf
        <div>
            <label for=""><b>User Skill : </b></label>
            <br>

            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="PYTHON" id="python">
            <label for="python">PYTHON</label>
            <input type="checkbox" name="skill[]" value="JAVA" id="java">
            <label for="java">JAVA</label>
        </div>

        <div>
            <br>
            <label for=""><b>User Gender : </b></label><br>
            
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
        </div>

        <div>
            <br>
            <label for=""><b>User City : </b></label><br>
            
            <select name="city" id="">
                <option value="rajkot">Rajkot</option>
                <option value="jamnagar">Jamnagar</option>
                <option value="ahmedabad">Ahmedabad</option>
                <option value="surat">Surat</option>
            </select>
        </div>

        <div>
            <br>
            <label for=""><b>User Age : </b></label><br>
            
            <input type="range" name="age" min="18" max="100" id="">
        </div>

        <div>
            <br>
            <button>Add Information</button>
        </div>
    </form>
</div>
