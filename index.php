<?php
    include "navbar.php";
    include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>
    <style type="text/css">
        body
        {
            background-color: #B0AEFE;
            font-family: Consolas !important;
        }

        h2,p
        {
            font-family: Consolas !important;
        }

        *
        {
            box-sizing: border-box;
        }

        .hash
        {
            width: 60%;
            border: 3px solid #0A0162;
        }
        .hash input
        {
            background: #f1f1f1;
            border-radius: 10px;
        }
        .open-button
        {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            position: relative;
            width: 150px;
        }


        .form-popup
        {
            display: none;
            position: relative;
            border: 3px solid #0A0162;
            z-index: 9;
            max-width: 600px;
            border-radius: 10px;
        }

        .form-container
        {
            width: 99%;
            padding: 30px;
            background-color: white;
            border-radius: 10px;

        }

        .form-popup span
        {
            position: absolute;
            margin-top: -25px;
            font-size: 30px;
            color: #0A0162;
        }

        .form-container input
        {
            width: 100%;
            padding: 15px;
            border: none;
            background: #f1f1f1;
            border-radius: 10px;
        }

        .form-container .btn
        {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 50%;
            margin-bottom: 10px;
            opacity: 0.8;
            border-radius: 10px;
        }


        .form-container .cancel
        {
            background-color: red;
        }


        .form-container .btn:hover,
        .open-button:hover
        {
            opacity: 1;
        }
        .typing-demo{
          width: 59ch;
          background-color: white;
          animation: typing 4s steps(40), blink .5s step-end infinite alternate;
          white-space: nowrap;
          overflow: hidden;
          border-right: 3px solid;
          font-family: monospace;
          font-size: 2em;
          color: black;

        }
    </style>
</head>

<body>
    <section>

            <center>
                <h1>Login to Continue</h1>
                <h2>NOTE: Your information are stored securely with hashing. Dont worry :)</h2>

                <h3>See how hashing works</h3>
                <form action="" method="post" class="hash">
                    <b>Random text</b><br>
                    <input type="text" placeholder="Enter a Random text" name="pass" required style="width: 80px"><br><br>
                    <button type="submit" class="btn" name="samppass" style="width: 50px">Submit</button><br><br>

                    <?php
                        if(isset($_POST['samppass']))
                        {
                            $pass1 = $_POST['pass'];
                            $hash1 = password_hash($pass1, PASSWORD_DEFAULT);
                            echo "Entered Text:  ".$hash1.".\n";
                        }
                    ?>
                </form>

                <br><br><br>

                <button class="open-button" onclick="openForm('myForm1', 'myForm2')" style="border-radius: 10px;">Login Form</button>

                <button class="open-button" onclick="openForm('myForm2', 'myForm1')" style="border-radius: 10px;">Signup Form</button>

                <br><br>
                <div class="form-popup" id="myForm1">

                    <span class="glyphicon glyphicon-triangle-top" style="margin-left: -90px;"></span>

                    <form action="" method="post" class="form-container">
                        <h1>Login</h1>
                        <br><br>

                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Your Username" name="username" required>
                        <br><br>
                        <label for="password"><b>Password</b></label>
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

                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>
                        <br><br>
                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>
                        <br><br>
                        <label for="degree"><b>Degree</b></label>
                        <input type="text" placeholder="B.tech, M.tech, ..." name="degree" required>
                        <br><br>
                        <label for="year"><b>Graduate Year</b></label>
                        <input type="text" placeholder="2021, 2022, ..." name="year" required>
                        <br><br>
                        <button type="submit" class="btn" name="register">Register</button>
                        <br>
                        <button type="button" class="btn cancel" onclick="closeForm('myForm2', 'myForm1')">Close</button>
                    </form>
                </div>

            </center>


    </section>
    <script>
        function openForm(x, y) {
            document.getElementById(x).style.display = "none";
            document.getElementById(y).style.display = "none";
            document.getElementById(x).style.display = "block";
            window.scrollTo(0,document.body.scrollHeight);
        }

        function closeForm(x, y) {
            document.getElementById(x).style.display = "none";
            document.getElementById(y).style.display = "none";
        }
    </script>
</body>

<?php
    if(isset($_POST['loginsubmit']))
    {
        $password = $_POST['password'];

        $sql = mysqli_query($db, "SELECT `password` FROM `user_hd` WHERE `username` = '$_POST[username]';");
        $row = mysqli_fetch_assoc($sql);
        $count = mysqli_num_rows($sql);

        if($count != 0)
        {
            if(password_verify($password, $row['password']))
            {
                ?>
                <script type="text/javascript">
                    alert("Password is correct");
                    window.location.replace('home.php');
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
            </script>
            <?php
        }
    }
    elseif(isset($_POST['register']))
    {
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);     /* Secure password hash. */

        $sql = mysqli_query($db, "INSERT INTO `user_hd` VALUES ('$_POST[username]', '$hash', '$_POST[degree]', '$_POST[year]');");

        $_SESSION['username'] = $_POST['username'];
    }


?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</html>