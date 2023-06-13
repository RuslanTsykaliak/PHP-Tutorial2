<?php // https://www.php.net/manual/en/function.setcookie.php

// setcookie(name,value,expires,path)

// $category_name="Food";
// $category_value="Apple Pie";

// setcookie($category_name,$category_value,time()+86400,"/");
setcookie("Food","Apple Pie",time()+86400,"/");

echo "Cookie is set";