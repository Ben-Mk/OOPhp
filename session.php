<?php
echo 'hello';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php 
        $_SESSION['favcolor'] = 'green';
        echo 'session set';
    ?>
</body>
</html>