<?php
class Sample{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function __get($name){
        return $this->$name;
    }

    public function getInfo(){
        echo $this->name."<br />";
        echo $this->age."<br />";
    }
}
$sample  = new Sample('My',6.5);
$sample->getInfo();
echo $sample->name."<br />";

$sample->color = 'red';
//echo $sample->color;
?>