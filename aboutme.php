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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7928001530877143" crossorigin="anonymous"></script>
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
            border: none;
            background: #f1f1f1;
            border-radius: 10px 0px 0px 10px;
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
                <h1 style="font-weight: bold; text-decoration: underline;">ABOUT ME</h1><span style="font-size: 50px">&#128514;</span>

                <h2>Ena paa, Yenna pathi theriji ena panna poorigaa ?? Maati vida poorigalaa <span>&#128514;</span> Athu nadakathuuu</h2>

                <h2>Summa help pannanumnu thonuchuu So panna. Helpful ahh irudhuthunaa Like ahh thatti vidugaa. It motivates mee laa &#128521;. Future la inu naraiya varuim, for every subjects. Athu varaikuim maati vidathigaa &#128541;. Vera ena nanbaa??</h2>

                <h2>NOTE: This website is for educational Purpose only. </h2>

                <h1 style="font-weight: bold; text-decoration: underline;">Oiii Maarakama LIKE ahh thatti vidugaa</h1>
                <form action="" method="post" class="form-container">
                    <button type="submit" name="like" class="like"><i class="fa fa-thumbs-up"></i></button>

                    <br><br>
                    <input type="text" name="cmts" placeholder="Any queries ? Just post it.." ><button type="submit" name="submit" class="btn btn-success">Submit</button>
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
        $sql1 = mysqli_query($db, "SELECT * FROM `review_hd` WHERE `username` = 'demo';");
        $row = mysqli_fetch_assoc($sql1);
        $count = $row['count'];
        $add = $count + 1;

        $sql2 = mysqli_query($db, "UPDATE `review_hd` SET `count` = $add WHERE `username` = 'demo';");
        echo '<center><h2>'.$add.' peoples likes this page including you :)</center>';
    }
    if(isset($_POST['submit']))
    {
        $sql1 = mysqli_query($db, "SELECT * FROM `review_hd` WHERE `username` != 'demo' ORDER BY `count` DESC;");
        $row = mysqli_fetch_assoc($sql1);
        $count = $row['count'];
        $sno = $count + 1;

        $sql2 = mysqli_query($db, "INSERT INTO `review_hd` VALUES ($sno, '$_SESSION[username]', '$_POST[cmts]');");
    }
?>

</html>
