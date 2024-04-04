<?php
 class Person{
    public $name;
    public $id; 

    public function __construct($name, $id){
        $this->name = $name;
        $this->id = $id;
    }

    public function getter(){
        return $this->name;
    }

    public function setter($name){
        $this->name = $name;
    }
}

class Personnal extends Person{
    public function hello(){
        echo "Hellow";
    }
}

$Ben = new Personnal("Ben", 203920);
echo $Ben->id;
echo $Ben->name;
echo $Ben->setter('Jane');
echo $Ben->getter();
$Ben->hello();
?>

