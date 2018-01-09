<?php
$arr = array(
  array('id'=>'1', 'name'=>'Sport', 'parent'=>'0'),
  array('id'=>'2', 'name'=>'About', 'parent'=>'0'),
  array('id'=>'3', 'name'=>'Home', 'parent'=>'0'),
  array('id'=>'4', 'name'=>'Soccer', 'parent'=>'1'),
  array('id'=>'5', 'name'=>'Tennis', 'parent'=>'1'),
);
echo '<pre>';
print_r($arr);
echo '</pre>';

foreach ($arr as $key => $value) {
  if ($value['parent'] == 0) {
    echo $value['name'].'<br />';
    foreach ($arr as $key2 => $value2) {
      if ($value2['parent'] == $value['id']) {
        echo '---'.$value2['name']."<br />";
      }
    }
  }
}
?>
