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
        .typing-demo h1{
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

        .typing-demo blink{
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
                echo '<h1 class="typing-demo">Hii '.$_SESSION['username'].', Welcome to HelperDOC.<blink></blink></h1>';
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</html>