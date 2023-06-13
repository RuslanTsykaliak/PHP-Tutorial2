<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
<!-- Ger method 
<a href="<?php echo $_SERVER['PHP_SELF'] ?>? subject=PHP">Click me</a>

<?php
echo "This is ". $_GET['subject']." tutorial";


?> -->



<form action="welcome.php" method="post">


<input type="text" name="fname" autocomplete="off">
<br>
<br>
<input type="text" name="lname" autocomplete="off">
<br>
<br>
<button type="submit">Submit</button>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
} 
?>
<!-- when to use get and post -->
</body>
</html>