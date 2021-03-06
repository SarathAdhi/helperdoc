<?php
    include "navbar.php";
    include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3686965845963720"
     crossorigin="anonymous"></script>
    <title>HDoc | HOME</title>
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
        .intro{
            width: 80%;
            font-size: 30px;
            color: #0A0162;
        }
        .section1
        {
            height: auto;
        }
        
        .welcome{
            color: black;
        }

        .section2
        {
            width: 95%;
            border-radius: 10px;
            background-color: white;
            height: auto;
            border: 2px solid #FFBF00;
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
                <h1 class="welcome">Hii <?php echo $_SESSION['username']; ?>, Welcome to HelperDOC...</h1>
                <br>
                    
                <div class="intro">This is a platform where you can download notes for various courses and share your notes. Feel free to share your notes and make sure you upload the correct information.</div>
                <br><br>
                <button class="open-button" id="button" onclick="openForm('myForm4', 'myForm4')" style="border-radius: 10px;">Upload notes</button>

                <?php include 'upload_notes.php'; ?>

            </div>

        </center>
        <br><br>
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
            
            <?php include 'signin_signup.php'; ?>

            <br><br>
        </center>

    </section>
<?php
    }
?>
<!--     <section class="section2">
        <center>
            <br>
            <div>
                <h1 style="text-decoration: underline;">Latest updates</h1>
                <?php
                    // $sql = mysqli_query($db, "SELECT * FROM `notes_hd` ORDER BY `topic` ASC;");
                    // $i = 0;
                    // while($row = mysqli_fetch_assoc($sql) AND $i<4)
                    // {
                    //     echo '<h2>'.$row['coursecode'].'</h2>';
                    //     echo '<h2>'.$row['topic'].'</h2>';
                    //     echo '<a href="notesview.php?id='.$row['coursecode'].'">Check here</a><br><br>';
                    //     $i = $i+1;
                    // }
                    
                ?>

            </div>

        </center>
    <br><br>
    </section> -->
    <center>                    
    <section class="section2">
        
            <br>
            <div>
                <h2>NOTE: Your information are stored securely with hashing. Dont worry :)</h2>

                <h3>Check how hashing works (live)</h3><button class="open-button" onclick="openForm('myForm3', 'myForm3')" style="border-radius: 10px;">test here</button><br><br>

                <div class="form-popup" id="myForm3">
                    <form action="" method="post" class="form-container">
                        <h3><b>Random text</b></h3><br>
                        <input type="text" placeholder="Enter a Random text" name="pass" required><br><br>
                        <button type="submit" class="btn" name="samppass" style="color: white; background-color: green; opacity: 0.8;">Submit</button>
                        <button type="button" class="btn cancel" onclick="closeForm('myForm3', 'myForm2')" style="color: white; background-color: red; opacity: 0.8;">Close</button>
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
                        // for ($x = 0; $x <= 30; $x++)
                        // {
                        //     echo $hash1[$x];
                        // }
                        echo '<a href="https://drive.google.com/drive/folders/1Nh-sPkO26W-TNkrrFXrYAIPZ6GUzSbSM?usp=sharing" target="_blank">click</a>';
                    }
                ?>
            </div>

        
    <br><br>
    </section>
    </center>
</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
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
</html>
