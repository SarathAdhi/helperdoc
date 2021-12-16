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

    </style>
</head>

<body>
    <section>
        <center>
        <?php
            if(isset($_SESSION['username']))
            {
                ?>
                <div class="welcome">
                    <h2>Hii <?php echo $_SESSION['username']; ?>, Welcome to HelperDOC...</h2>
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
        </center>
    </section>

</body>

</html>