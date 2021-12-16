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

        .typing h1 {
           display: inline-block;
           position: relative;
           font-family: monospace;
           font-size: 60px;
           margin: 40px;
           /* overflow: hidden; */
          }

          h1::after {
           box-sizing: border-box;
           content: "";
           position: absolute;
           width: 100%;
           height: 100%;
           /* background-color: transparent; */
           background-color: white;
           top: 0;
           right: 0;
           border-left: 3px solid black;
           animation: cursor 0.5s linear infinite, typing 3s steps(50) forwards 1;

          }

          @keyframes cursor {
           0% {
            border-color: black;
           }
           50% {
            border-color: black;
           }
           65% {
            border-color: transparent;
           }
           75% {
            border-color: transparent;
           }
           90% {
            border-color: black;
           }
           100% {
            border-color: black;
           }

          }

          @keyframes typing {
           to {
            width: 0;
           }
          }
    </style>
</head>

<body>
    <section>
        <?php
            if(isset($_SESSION['username']))
            {
                ?>
                <div class="typing">
                    <h1>Hii <?php echo $_SESSION['username']; ?>, Welcome to HelperDOC...<blink></blink></h1>
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