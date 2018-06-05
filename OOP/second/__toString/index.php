<?php
class Sample{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString(){
        $result = $this->name."<br />";
        $result.= $this->age;
        return $result;
    }
}
$sample  = new Sample('My',6.5);
echo ($sample);
?>