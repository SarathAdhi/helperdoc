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

        h1{
          animation: type 3s steps(30);
          color:lightgreen;
          white-space:nowrap;
          overflow:hidden;
          width:30ch;
          }

        @keyframes type{
          0%{
            width:0ch;
          }
          
          100%{
            width:30ch;
          }
        }

        @keyframes blink{
          0%{opacity:1;}
          50%{opacity:0;}
          100%{opacity:1;}
        }

        blink{
          animation: blink 1s linear infinite;
          border-right: 10px solid lightgreen;
          height:12px;
        }
    </style>
</head>

<body>
    <section>
        <?php
            if(isset($_SESSION['username']))
            {
                ?>
                <h1>Hii <?php $_SESSION['username'] ?>, Welcome to HelperDOC.<blink></blink></h1>
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