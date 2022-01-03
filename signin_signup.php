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
<?php
    if(isset($_POST['loginsubmit']))
    {
        $sql = mysqli_query($db, "SELECT * FROM `user_hd` WHERE `username` = '$_POST[username]';");
        $row = mysqli_fetch_assoc($sql);
        $count = mysqli_num_rows($sql);
        

        if($count != 0)
        {
            $password = $_POST['password'];
            if(password_verify($password, $row['password']))
            {
                $count1 = $row['count'];
                $cres = $count1 + 1;

                $sql2 = mysqli_query($db, "UPDATE `user_hd` SET `count` = '$cres' WHERE `username` = '$_POST[username]';");
                ?>
                <script type="text/javascript">
                    alert("Login Successful");
                    window.location.replace('home');
                </script>
                <?php
                $_SESSION['username'] = $_POST['username'];
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert("Password is incorrect");
                </script>
                <?php
            }
        }
        else
        {
            ?>
            <script type="text/javascript">
                alert("Username does not exist.");
                openForm('myForm1', 'myForm2');
            </script>
            <?php
        }
    }
    elseif(isset($_POST['register']))
    {
        $sql1 = mysqli_query($db, "SELECT * FROM `user_hd` WHERE `username` = '$_POST[username]';");
        $count = mysqli_num_rows($sql1);

        if($count == 0)
        {
            date_default_timezone_set('Asia/Kolkata');  /* India Standard Time */
            $date = date("d-m-Y");
            $time = date("h:i a",time());

            $password = $_POST['password'];
            $hash = password_hash($password, PASSWORD_DEFAULT);     /* Secure password hash. */
            $sql2 = mysqli_query($db, "INSERT INTO `user_hd` VALUES ('$_POST[username]', '$hash', '$_POST[degree]', '$_POST[year]', '$date', '$time', 1);");
            ?>
            <script type="text/javascript">
                alert("Account successfully created.");
                openForm('myForm1', 'myForm2');
            </script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
                alert("Username already exist.");
                openForm('myForm2', 'myForm1');
            </script>
            <?php
        }
    }
?>