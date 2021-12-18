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
            background-color: #EBEAFD;
            font-family: Consolas !important;
        }

        *
        {
            box-sizing: border-box;
        }

        .section1
        {
            background-color: #EBEAFD;
            height: auto;
        }

        .section2
        {
            background-color: white;
            height: auto;
        }

        .open-button
        {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            position: relative;
            max-width: 150px;
        }


        .form-popup
        {
            display: none;
            position: relative;
            border: 3px solid #0A0162;
            z-index: 9;
            max-width: 600px;
            border-radius: 10px;
            margin: 10px;
        }

        .form-container
        {
            width: 100%;
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
            width: 80%;
            padding: 15px;
            border: none;
            background: #f1f1f1;
            border-radius: 10px;
        }

        .form-container label
        {
            font-size: 20px;
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
    </style>
</head>

<body>

<?php
    if(isset($_SESSION['username']))
    {
?>

    <section class="section1">
        <br><br>
        <center>

            <div class="content1">
                <h2>Hii <?php echo $_SESSION['username']; ?>, Welcome to HelperDOC...</h2>
                <br>
                    
                <p>This is a platform where you can download notes for various courses and share your notes. This website is still under construction.</p>
                <br><br>
                <button class="open-button" id="button" onclick="openForm('myForm4', 'myForm4')" style="border-radius: 10px;">Upload notes</button>

                <div class="form-popup" id="myForm4">
                    <form action="" method="post" class="form-container">

                        <h3><b>Share your notes here :)</b></h3><br>

                        <label for="coursecode"><b>Course Code(in CAPS)</b></label><br>
                        <input type="text" placeholder="Ex: CSE2004, HUM1042, MAT1014..." name="coursecode" required>
                        <br><br><br>

                        <label for="tl"><b>Theory or Lab&emsp;</b></label>
                        <select name="tl" size="1" style="color: black; font-size: 20px">
                            <option value="Theroy">Theory</option>
                            <option value="Lab">Lab</option>
                        </select>
                        <br><br><br>

                        <label for="module"><b>Module number&emsp;</b></label>
                        <select name="module" size="1" style="color: black; font-size: 20px">
                            <option value="Module 1">Module 1</option>
                            <option value="Module 2">Module 2</option>
                            <option value="Module 3">Module 3</option>
                            <option value="Module 4">Module 4</option>
                            <option value="Module 5">Module 5</option>
                            <option value="Module 6">Module 6</option>
                            <option value="Module 7">Module 7</option>
                            <option value="Module 8">Module 8</option>
                            <option value="Other">Other</option>
                        </select>
                        <br><br><br>

                        <label for="link"><b>Google drive link</b></label><br>
                        <input type="text" placeholder="Ex: https://drive.google.com/drive/folders/147HZDgl6FCxTt" name="link" required>
                        <br><br><br>

                        <button type="button" class="btn cancel" onclick="closeForm('myForm4', 'myForm4')" style="color: white; background-color: red; opacity: 0.8;">Close</button>

                        <button type="submit" class="btn" name="upload" style="color: white; background-color: green; opacity: 0.8;">Upload</button>
                        <br><br>
                    </form>
                </div>
            </div>

        </center>
        <br><br>
<?php
    if(isset($_POST['upload']))
    {
        
        $sql2 = mysqli_query($db, "INSERT INTO `notes_hd` VALUES ('$_POST[coursecode]', '$_POST[tl]', '$_POST[module]', '$_POST[link]');");
        ?>
        <script type="text/javascript">
            alert("Successfully Uploaded.");
        </script>
        <?php
    }
?>

    </section>

<?php
    }
    else
    {
?>
    <section class="section1">
        <br><br>
        <center>

            <h1>Login to Continue</h1><br>
            <button class="open-button" id="button" onclick="openForm('myForm1', 'myForm2')" style="border-radius: 10px;">Login Form</button>

            <button class="open-button" onclick="openForm('myForm2', 'myForm1')" style="border-radius: 10px;">Signup Form</button>

            <br><br><br>
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
            <br><br>
        </center>
    </section>
<?php
    }
?>
    <section class="section2">
        <center>
            <br>
            <div>
                <h2>NOTE: Your information are stored securely with hashing. Dont worry :)</h2>

                <h3>Check how hashing works (live)</h3><button class="open-button" onclick="openForm('myForm3', 'myForm3')" style="border-radius: 10px;">test here</button><br><br>

                <div class="form-popup" id="myForm3">
                    <form action="" method="post" class="form-container">
                        <h3><b>Random text</b></h3><br>
                        <input type="text" placeholder="Enter a Random text" name="pass" required><br><br>
                        <button type="button" class="btn cancel" onclick="closeForm('myForm3', 'myForm2')" style="color: white; background-color: red; opacity: 0.8;">Close</button>
                        <button type="submit" class="btn" name="samppass" style="color: white; background-color: green; opacity: 0.8;">Submit</button>
                        <br><br>
                    </form>
                </div>
                <?php
                    if(isset($_POST['samppass']))
                    {
                        $pass1 = $_POST['pass'];
                        $hash1 = password_hash($pass1, PASSWORD_DEFAULT);
                        echo "Entered Text:  ".$pass1."\n";
                        echo '<br>';
                        echo "Hashed Code: ";
                        for ($x = 0; $x <= 30; $x++)
                        {
                            echo $hash1[$x];
                        }
                    }
                ?>
            </div>

        </center>
    <br><br>
    </section>
    <script>
        function openForm(x, y) {
            document.getElementById(x).style.display = "none";
            document.getElementById(y).style.display = "none";
            document.getElementById(x).style.display = "block";
            if (x === "myForm3")
            {
                var elem = document.getElementById("myForm3");
                elem.scrollIntoView();
            }
            else
            {
                var elem = document.getElementById("button");
                elem.scrollIntoView();
            }
        }

        function closeForm(x, y) {
            document.getElementById(x).style.display = "none";
            document.getElementById(y).style.display = "none";
            window.scrollBy(0,-20);
        }
    </script>
</body>

<?php
    if(isset($_POST['loginsubmit']))
    {
        $sql = mysqli_query($db, "SELECT `password` FROM `user_hd` WHERE `username` = '$_POST[username]';");
        $row = mysqli_fetch_assoc($sql);
        $count = mysqli_num_rows($sql);

        if($count != 0)
        {
            $password = $_POST['password'];
            if(password_verify($password, $row['password']))
            {
                ?>
                <script type="text/javascript">
                    window.location.replace('index.php');
                    setTimeout(alert("Password is correct"), 3000);
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
            $password = $_POST['password'];
            $hash = password_hash($password, PASSWORD_DEFAULT);     /* Secure password hash. */
            $sql2 = mysqli_query($db, "INSERT INTO `user_hd` VALUES ('$_POST[username]', '$hash', '$_POST[degree]', '$_POST[year]');");
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</html>
