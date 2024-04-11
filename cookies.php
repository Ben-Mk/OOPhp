<?php 
$name = 'Ben';
//setting a cookie
setcookie("exampleCookie",$name, time() + 3600);
//echo $_COOKIE['examplCookie'];
print_r($_COOKIE);
//deleting the cookie
setcookie('exampleCookie', '', time() - 3600);
?>