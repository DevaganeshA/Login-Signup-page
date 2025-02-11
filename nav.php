<!DOCTYPE html>
<html lang="en">


<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:Login.php');
}

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Borel&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .main {
            height: 625px;
            width: 100%;
            background-color: aqua;
            border: 5px solid purple;
            background-image: url(./green.gif);
            background-repeat: no-repeat;
            background-size: cover;
            background-size: 100% 100%;
        }
        .a{
            height: 50px;
            width: 800px;
            /* background-color: rgb(255, 81, 0); */
            float: right;
            margin-top: 25px;
        }
        .a ul li{
            float: left;
            list-style: none;
            line-height: 50px;
            width: 160px;
            margin-left: 8px;
            font-size: 21px;
            text-align: center;
        }

        .a ul{
            margin-left: 0px;
         }
        .a li a{
            text-decoration: none;
            display: block;
            color: black;
         }
     /* ============================================================= */
     .a ul a{
            /* background-color: rgb(175, 31, 219); */
            color:black;
         }     
         .a ul li{
           margin-left: 0px;
         }
         .a li a:hover{
            background-color: rgb(31, 129, 240);
         }
         .a li ul{
            display: none;
         }
         .a li:hover ul{
            display: block;
            /* position: relative;
            z-index: 2; */
         }
         .h{
            margin-top: 273px;
    margin-left: 235px;
            color: green;
            text-shadow: 6px 4px 3px greenyellow;
         }
         .o{
            margin-top: 0px;
            margin-left: 182px;
            display: inline-block;
            color: green;
            text-shadow: 6px 4px 3px greenyellow;
            
         }
         .l{
            margin-top: 0px;
            margin-left: 10px;
            display: inline-block;
            color: green;
            text-shadow: 6px 4px 3px greenyellow;
         }
.e{
    margin-top: 0px;
            margin-left: 248px;
            color: green;
            text-shadow: 6px 4px 3px greenyellow;

}
.a li a{
    /* font-family: 'Borel', cursive; */
    font-family: 'Borel', Dai Banna SIL;
}
.icon{
    height: 20px;
    width: 60px;
    /* background-color: #26e8c8; */
    float: right;
    margin-top: 98px;
    margin-right: 32px;
}

    </style>
</head>

<body>
    <div class="main">
        <p>Welcome <?php echo ($_SESSION['username']); ?></p>
        <i class="fa-brands fa-wordpress fa-2xl abc"
            style="color: #4bcece; margin-top: 80px; margin-left: 100px; font-size: 110px;"></i>
    <div class="a">
        <ul>
            <li><a href="">About Us</a>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Get A Quote</a></li>
                </ul>
            
            </li>

            <li><a href="">Services</a>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Get A Quote</a></li>
                </ul>
            </li>

            <li><a href="">Blog</a>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Get A Quote</a></li>
                </ul>
            </li>

            <li><a href="">Contact Us</a>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Get A Quote</a></li>
                </ul>
            </li>

            <li><a href="./logout.php" >logout<i class="fa-solid fa-right-from-bracket"></i></a></li>

    
        </ul>
    </div>
    <div class="h"><h1>Responsible</h1></div>
    <div class="o"><h1>Consumption</h1></div>
    <div class="l"><h1>And</h1></div>
    <div class="e"><h1>Production</h1></div>

    <div class="icon">
        <i class="fa-solid fa-signal" style="color: #fdd408;"></i>
        <i class="fa-brands fa-square-twitter" style="color: #26e8c8;"></i>
    <i class="fa-brands fa-square-facebook " style="color: #1e64dc;"></i>
    </div>
    </div>
</body>

</html>