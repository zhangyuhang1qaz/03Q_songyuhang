<?php 

function __autoload($class){
	
	require "$class.php";
}
$obj = new Fly();
$data = $obj->select("day");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
	<table border="1">
		<tr>
			<td>出发地</td>
			<td>目的地</td>
			<td>票数</td>
			<td></td>
		</tr>
		<?php foreach ($data as $key => $value){?>
		<tr>
			<td><?php echo $value['active'] ?></td>
			<td><?php echo $value['d_active'] ?></td>
			<td><?php echo $value['ticket'] ?></td>
			<td><a href="./index.php?id=<?php echo $value['id'] ?>">抢票</a></td>
		</tr>
		<?php } ?>
		
	</table><a href="./add.php">添加</a></center>
</body>
<html>
