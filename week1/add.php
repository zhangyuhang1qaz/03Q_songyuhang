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
	<form action="./add_do.php" method="post">
		<table>
			<tr>
				<td>标题</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>分类</td>
				<td><input type="text" name="lei"></td>
			</tr>
			<tr>
				<td>描述</td>
				<td><input type="text" name="say"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>