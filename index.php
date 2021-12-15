<?php
    include "navbar.php";
    include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
            width: 100%;
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
    </style>
</head>

<body>
    <section>
        <center>
            <h1>Login to Continue</h1>
            <h2>NOTE: Your information are stored securely with hashing. Dont worry :)</h2>


            <button class="open-button" onclick="openForm('myForm1', 'myForm2')" style="border-radius: 10px;">Login Form</button>

            <button class="open-button" onclick="openForm('myForm2', 'myForm1')" style="border-radius: 10px;">Signup Form</button>

            <br><br>
            <div class="form-popup" id="myForm1">

                <span class="glyphicon glyphicon-triangle-top" style="margin-left: -90px;"></span>

                <form action="" method="post" class="form-container">
                    <h1>Login</h1>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>
                    <br><br>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <br><br>
                    <button type="submit" class="btn" name="login">Login</button>
                    <br>
                    <button type="button" class="btn cancel" onclick="closeForm('myForm1', 'myForm2')">Close</button>
                </form>
            </div>



            <div class="form-popup" id="myForm2">
                <span class="glyphicon glyphicon-triangle-top" style="margin-left: 60px;"></span>
                <form action="" method="post" class="form-container">
                    <h1>Signup</h1>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <br><br>
                    <label for="psw"><b>Password</b></label>
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

        }

        function closeForm(x, y) {
            document.getElementById(x).style.display = "none";
            document.getElementById(y).style.display = "none";
        }
    </script>
</body>

<?php
    if(isset($_POST['login']))
    {
        $sql = mysqli_query($db, "SELECT `password` FROM `user_hd` WHERE `username` = '$_POST[username]');");
        $row = mysqli_fetch_assoc($sql);
        if(password_verify($password, $row['password']))
        {
            ?>
            <script type="text/javascript">
                alert("Password correct");
            </script>
            <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
                alert("Password wrong");
            </script>
            <?php
        }
    }
    elseif(isset($_POST['register']))
    {
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);     /* Secure password hash. */

        $sql = mysqli_query($db, "INSERT INTO `user_hd` VALUES ('$_POST[username]', '$hash', '$_POST[degree]', '$_POST[year]');");
    }
?>

</html>