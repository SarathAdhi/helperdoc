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

        .section1
        {
            background-color: #EBEAFD;
            height: auto;
        }

        .section2
        {
            background-color: white;
            height: auto;
            border: 2px solid #FFBF00;
        }
        .like
        {
            width: auto;
            height: auto;
            background-color: transparent;
            border: none;
        }
        .like i
        {
            font-size: 50px;

        }
        .form-container
        {
            max-width: 600px;
            border-radius: 10px;

        }
        .form-container input
        {
            width: 80%;
            height: 30px;
            border: none;
            background: #f1f1f1;
            border-radius: 5px;
            border: 1px solid black;
        }

    </style>
</head>

<body>
<?php
    if(isset($_SESSION['username']))
    {
?>
    <section class="section1">
        <center>
            <br><br>
            <div>
                <h1 style="font-weight: bold; text-decoration: underline;">ABOUT ME</h1>

                <h2>நான் தமிழன் நண்பா</h2>
                <br/>
                <br/>
                <h2>NOTE: This website is for educational Purpose only. </h2>

                <div style="width: 80%; font-weight: bold;"><h2>If you like this website, Don't forget to Hit the like button. It motivates mee :)</h2></div>
                <form action="" method="post" class="form-container">
                    <button type="submit" name="like" class="like"><i class="fa fa-thumbs-up"></i></button>

                    <br><br>
                    <input type="text" name="cmts" placeholder="Any queries ? Just post it.." >&ensp;<button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
                
            </div>

        </center>
        <br><br>
    </section>
<?php
    }
    else
    {
        ?>
            <script type="text/javascript">
                location.replace('home');
                alert("Please login first");
            </script>
        <?php
    }
?>
</body>

<?php
    if(isset($_POST['like']))
    {
        $sql1 = mysqli_query($db, "SELECT * FROM `review_hd` WHERE `username` = 'reviewtest';");
        $row = mysqli_fetch_assoc($sql1);
        $count = $row['count'];
        $add = $count + 1;

        $sql2 = mysqli_query($db, "UPDATE `review_hd` SET `count` = $add WHERE `username` = 'reviewtest';");
        echo '<center><h2>'.$add.' peoples likes this page including you :)</center>';
    }
    if(isset($_POST['submit']))
    {
        $sql1 = mysqli_query($db, "SELECT * FROM `review_hd` WHERE `username` != 'reviewtest' ORDER BY `count` DESC;");
        $row = mysqli_fetch_assoc($sql1);
        $count = $row['count'];
        $sno = $count + 1;

        $sql2 = mysqli_query($db, "INSERT INTO `review_hd` VALUES ($sno, '$_SESSION[username]', '$_POST[cmts]');");
    }
?>

</html>
