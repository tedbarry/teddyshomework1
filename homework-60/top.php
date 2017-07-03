<?php
if(empty($color)) {
    $color = "black";
}

$bgcolor = "white";
if(!empty($_GET["bgcolor"])) {
    $bgcolor = $_GET["bgcolor"];
}
$color = "green";
if(!empty($_GET["color"])) {
    $color = $_GET["color"];
}
$fontfamily = "arial";
if(!empty($_GET["font-family"])) {
    $fontfamily = $_GET["font-family"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teddy's Template</title>
    <link href="/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <?php foreach($stylesheets as $stylesheet) :?>
        <link href="<?=$stylesheet?>" rel="stylesheet">
    <?php endforeach ?>
    <style>  
        body {
            color: <?= $color ?>;
            background-color: <?= $bgcolor ?>;
            font-family: <?= $fontfamily ?>;
        }

        <?php 
        if(!empty($styles)) {
            foreach($styles as $style) {
                echo $style;
            }
        }
        ?>
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="AboutUs.php">About Us <span class="sr-only">(current)</span></a></li>
        <li><a href="OurProducts.php">Our Products</a></li>
        <li><a href="ContactUs.php">Contact Us</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        </div>