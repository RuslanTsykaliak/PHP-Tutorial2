<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include './partials/connect.php' ?>
    <?php include './partials/header.php' ?>

<h1 class="text-center text-primary my-3">Welcome to our store</h1>
<h1 class="text-center text-success mb-4">Shop by Category</h1>

<div class="container">
    <div class="row"> 
        <!-- php code -->
        <?php
        $sql="Select * from `phones`";
        $result=mysqli_query($con,$sql);
        if($result){
            // $row=mysqli_fetch_assoc($result);
            // echo $row['category_name'];
            while($row=mysqli_fetch_assoc($result)){
                $category_id=$row['category_id'];
                $category_name=$row['category_name'];
                $category_desc=$row['category_desc'];
                $category_image=$row['category_image'];
                $category_price=$row['category_price'];
                echo ' <div class="col-md-4 col-sm-6-col-xm-12 mb-5">
                <div class="card">
                <img class="card-img-top" src='.$category_image.' alt="Card image cap" style="height:300;object-fit:contain">
                <div class="card-body">
                    <h5 class="card-title">'.$category_name.'</h5>
                    <p class="card-text">'.substr($category_desc,0,55).'...</p>
                    <p>$'.$category_price.'</p>
                    <a href="details.php?details_id='.$category_id.'" class="btn btn-primary">Shop now</a> 
                </div>
                </div>
            </div>';

            }
        }
        ?>

            



    </div>
</div>


</body>
</html>