<?php
class Sample{
    static $a = 10;

    public $b = 11;

    public function __construct(){
        
    }

    static function test(){
        echo 'Self: '.self::$a;
    }

   
    function test2(){
        echo 'Normal: '.$this->b;
    }

    function showInfo(){
        echo Sample::$a."<br />";
        echo Sample::test();
        echo "<br />";
        echo $this->b."<br />";
        echo $this->test2()."<br />";
    }
}
?>