<?php  // https://www.php.net/manual/en/book.session.php


session_start();
$_SESSION['username']="Ruslan";
$_SESSION['password']="Tsykaliak";
$_SESSION['email']="ruslan.tsykaliak@gmail.com";
echo "Session data is saved";

