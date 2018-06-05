<?php
class Sample{
    static $a = 10;

    static function test(){
        echo 'Self: '.self::$a;
    }
}
$sample  = new Sample();
echo Sample::$a."<br />";
echo Sample::test();
?>