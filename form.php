<?php
echo 2 . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        Name: <input type="text" name="name" id="">
        <br>
        Email: <input type="email" name="email" id="">
        <br>
        Gender: <input type="radio" name="gender" <?php 
        if(isset($gender) && $gender == "male") echo "checked"?> value="Male">Male
        <br>
        <input type="submit" value="submit">
        
    </form>
    <?php 

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                echo "Name required <br>";
            }else{
                $name = test_input($_POST["name"]);
            }

            if(empty($_POST["email"])){
                echo "Email required";
            }else{
                $email = test_input($_POST["email"]);
            }
            
            if(empty($_POST["gender"])){
                echo "Gender required";
            }else{
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
    ?>
    <div class="result">
        <?php 
            echo "Name is " . $name . '<br>';
            echo "Email is " . $email . '<br>';
            echo $gender;
        ?>
    </div>
</body>
</html>