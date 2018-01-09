<?php
$arr = array(
	array(
		'id'=>'1',
		'name'=>'Menu 1',
		'parent'=>'0'
	),

	array(
		'id'=>'2',
		'name'=>'Menu 2',
		'parent'=>'0'
	),

	array(
		'id'=>'3',
		'name'=>'Menu 3',
		'parent'=>'0'
	),

	array(
		'id'=>'4',
		'name'=>'Menu 1.1',
		'parent'=>'1'
	),

	array(
		'id'=>'5',
		'name'=>'Menu 1.2',
		'parent'=>'1'
	),

	array(
		'id'=>'6',
		'name'=>'Menu 2.1',
		'parent'=>'2'
	),

	array(
		'id'=>'7',
		'name'=>'Menu 2.2',
		'parent'=>'2'
	),

	array(
		'id'=>'8',
		'name'=>'Menu 1.2.1',
		'parent'=>'5'
	),

	array(
		'id'=>'9',
		'name'=>'Menu 1.2.2',
		'parent'=>'5'
	),
);

echo "<pre>";
print_r($arr);
echo "</pre>";

function recursion($data, $parent = 0, $text='--'){
	foreach($data as $key=>$value){
		if($value['parent'] == $parent){
			echo $text.$value['name']."<br />";
			$id = $value['id'];

			// Xoa phần tử đang xét khỏi array:
			unset($data[$key]);

			// Gọi hàm đệ quy:
			recursion($data, $id, $text.'--');
		}
	}
}
recursion($arr);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <select class="slt" name="slt" size="5">
    <?php
      foreach ($variable as $key => $value) {
        # code...
      }
    ?>
    </select>
  </body>
</html>
