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

    </style>
</head>

<body>

    <section class="section1">
        <center>
            <br><br>
            <div>
                <h1 style="font-weight: bold; text-decoration: underline;">ABOUT ME<br><span>&#128514;</span></h1>

                <h2>Ena paa, Yenna pathi theriji ena panna poorigaa ?? Maati vida poorigalaa <span>&#128514;</span> Athu nadakathuuu</h2>

                <h2>Summa help pannanumnu thonuchuu So panna. Helpful ahh irudhuthunaa Like ahh thatti vidugaa. It motivates mee laa &#128521;. Future a many more tools varuim, for every subjects. Athu varaikuim maati vidadhigaa &#128541;. Vera ena nanbaa??</h2>

                <h1>CLUE:</h1>
                <h2>1. Purely tamizhan.</h2>
                <h2>2. 2020 batch thaa.</h2>
                <h2>3. Reg no: 20BXXXXXX.</h2>
                <h2>4. Vara onu illa.</h2>

                <h1 style="font-weight: bold; text-decoration: underline;">Oiii Maarakama LIKE ahh thatti vidugaa</h1>
                <button type="submit" name="like" class="like"><i class="fa fa-thumbs-up"></i></button>
                
            </div>

        </center>
        <br><br>
    </section>
</body>

<?php
    if(isset($_POST['like']))
    {
        $sql1 = mysqli_query($db, "SELECT * FROM `user_hd` WHERE `username` = 'demo';");
        $row = mysqli_fetch_assoc($sql1);
        $count = $row['count'];
        $add = $count + 1;

        $sql2 = mysqli_query($db, "UPDATE `user_hd` SET `count` = $add WHERE `username` = 'demo';");
        echo '<h2>'.$add.' many people likes this page including you :)';
    }
?>

</html>
