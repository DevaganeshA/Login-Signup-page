<!doctype html>

<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:Login.php');
}

?>




<html lang="en">

<head>
<style>
  .container{
    text-align: center;
  }
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome page</title>
</head>

<body>
<h1 class=" mt-5 text-center text-warning">Welcom
    <?php echo ($_SESSION['username']); ?>
</h1>
<div class="container" >
    <a href="./logout.php" class="btn btn-primary mt-5 ">logout</a>
    </div>


</body>

</html>