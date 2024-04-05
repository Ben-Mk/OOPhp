<?php 
    function foo(){
        function bar(){
            echo "hellow there";
        }
    }

    function recursion($num){
        if($num < 10){
            echo $num;
            recursion($num + 1);
        }
    }
    //recursion(0);

    //Arrow function
    $func = fn($x) => $x + 2;
    $func(3);
    var_export($func(5))
?>