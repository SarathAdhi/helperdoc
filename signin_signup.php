<div class="form-popup" id="myForm1">

    <span class="glyphicon glyphicon-triangle-top" style="margin-left: -90px;"></span>

    <form action="" method="post" class="form-container">
        <h1>Login</h1>
        <br>

        <label for="username"><b>Username</b></label><br>
        <input type="text" placeholder="Enter Your Username" name="username" required>
        <br><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br><br>
        <button type="submit" class="btn" name="loginsubmit">Login</button>
        <br>
        <button type="button" class="btn cancel" onclick="closeForm('myForm1', 'myForm2')">Close</button>
    </form>
    
</div>

<div class="form-popup" id="myForm2">
    <span class="glyphicon glyphicon-triangle-top" style="margin-left: 60px;"></span>

    <form action="" method="post" class="form-container">
        <h1>Signup</h1>
        <br>

        <label for="username"><b>Username</b></label><br>
        <input type="text" placeholder="Enter Your Username" name="username" required>
        <br><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="password" required>
        <br><br>
        <label for="degree"><b>Degree </b></label>
        <select name="degree" size="1" style="color: black; font-size: 20px">
            <option value="B.Tech">B.Tech</option>
            <option value="M.Tech">M.Tech</option>
            <option value="other">other</option>
        </select>
        <br><br>
        <label for="year"><b>Graduate Year </b></label>
        <select name="year" size="1" style="color: black; font-size: 20px">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
        </select>
        <br><br>
        <button type="submit" class="btn" name="register">Register</button>
        <br>
        <button type="button" class="btn cancel" onclick="closeForm('myForm2', 'myForm1')">Close</button>
    </form>
    
</div>