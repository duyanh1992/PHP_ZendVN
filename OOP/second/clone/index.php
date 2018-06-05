<?php
class Sample{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}
$sample  = new Sample('My',6.5);
print_r($sample);
echo "<br />";

$sample2 = clone $sample;
$sample2->name = 'Yến';
print_r($sample2);
echo "<br />";

print_r($sample);
echo "<br />";


?>