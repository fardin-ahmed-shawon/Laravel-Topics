<h1>Add User</h1>

<form action="add-user" method="POST">
    @csrf
    <div>
        <h5>Skills</h5>
        <input type="checkbox" name="skills[]" value="php" id="php" />
        <label for="php">PHP</label>
        <input type="checkbox" name="skills[]" value="javascript" id="javascript" />
        <label for="javascript">JavaScript</label>
        <input type="checkbox" name="skills[]" value="python" id="python" />
        <label for="python">Python</label>
    </div>
    <div>
        <h5>Gender</h5>
        <input type="radio" name="gender" value="male" id="male" />
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female" />
        <label for="female">Female</label>
    </div>
    <div>
        <h5>City</h5>
        <select name="city" id="city">
            <option value="newyork">New York</option>
            <option value="losangeles">Los Angeles</option>
            <option value="chicago">Chicago</option>
        </select>
    </div>
    <div>
        <h5>Age</h5>
        <input type="range" name="age" min="18" max="100" />
    </div>
    <div>
        <button type="submit">Add User</button>
    </div>
</form>