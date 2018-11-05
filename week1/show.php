<?php
	function __autoload($class){
		require "$class.php";
}
$obj = new Db();
$data = $obj->select("week");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<tr>ID</tr>
			<tr>标题</tr>
			<tr>分类</tr>
			<tr>描述</tr>
			<tr>操作</tr>
		</tr>
		<?php foreach($data as $key=>$value){?>
		<tr>
			<tr><?php echo $value['id']?></tr>
			<tr><?php echo $value['title']?></tr>
			<tr><?php echo $value['lei']?></tr>
			<tr><?php echo $value['say']?></tr>
			<tr><a href="./del.php?id=<?php echo $value['id']?>">删除</a></tr>
		</tr>
		<?php }?>
	</table>
	<a href="./add.php">添加</a>
</body>
</html>