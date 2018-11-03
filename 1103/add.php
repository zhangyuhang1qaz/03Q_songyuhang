<?php 

function __autoload($class){
	
	require "$class.php";
}
$obj = new Fly();
$data = $obj->select("day");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="./add_do.php" method="post"><table>
		<tr>
			<td>出发地</td>
			<td><input type="text" name='active'></td>
		</tr>
		<tr>
			<td>目的地</td>
			<td><input type="text" name="d_active"></td>
		</tr>
		<tr>
			<td>票数</td>
			<td><input type="text" name="ticket"></td>
		</tr>
		<tr>
			<td><input type="submit" value="发放"></td>
			<td></td>
		</tr>
	</table></form>
</body>
</html>