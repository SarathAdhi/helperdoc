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
            background-image: url('background/1.jpg');
            background-size: cover;
            font-family: Consolas !important;
        }
        .section1
        {
            background-color: #EBEAFD;
            height: auto;
        }
        .content1
        {
            position: absolute;
            margin-left: 40px;
            margin-right: 40px;
        }
    </style>
</head>

<body>
    <section class="section1">

        <?php
            if(isset($_SESSION['username']))
            {
                ?>
                    <div class="content1">
                        <h2>Hii <?php echo $_SESSION['username']; ?>, Welcome to HelperDOC...</h2>
                        <br>
                    
                        <p>This is a platform where you can download notes for various courses and share your notes. This website is still under construction.</p>
                    </div>
                <?php
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert("Please login first");
                    window.location.replace('index.php');
                </script>
                <?php
            }
        ?>
    </section>

</body>

</html>