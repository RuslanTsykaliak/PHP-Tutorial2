<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include './partials/connect.php' ?>
    <?php include './partials/header.php' ?>
    <?php
    $id=$_GET['details_id'];
    // echo $id;
    $sql="SELECT * FROM `phones` WHERE category_id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $category_id=$row['category_id'];
    $category_name=$row['category_name'];
    $category_desc=$row['category_desc'];
    $category_image=$row['category_image'];
    $category_price=$row['category_price'];
    // echo $category_name

    ?>
<div class="jumbotron">
    <div class="container"> 
  <h1 class="display-4 text-center text-primary"><?php echo $category_name ?></h1>
  <p class="lead"><?php echo $category_desc ?></p>
  <button><a class="btn btn-dark btn-lg" href="index.php" role="button">Continue shopping</a></button>
  </p>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
        <img src=<?php echo $category_image ?> alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-sm-12">
        <h2 class="text-center text-danger"><?php echo $category_name ?></h2>
             <p ><?php echo $category_desc ?></p>
             <p ><strong>Price: </strong>$<?php echo $category_price ?></p>
             <button class="btn btn-success">Add to cart</button>
        </div>
             
    </div>
</div>
</body>
</html>