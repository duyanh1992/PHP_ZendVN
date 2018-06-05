<?php
require 'sample.php';
class Sample2 extends Sample{
    public $c = 12;

    function showInfo(){
        parent::showInfo();
        //echo $this->c;
    }
}
$sample2 = new Sample2();
$sample2->showInfo();
?>