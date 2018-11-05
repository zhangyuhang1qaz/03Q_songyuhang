<?php
header("content-type:text/html;charset=utf-8");
require './db.class.php';
$obj = new Db();
$data = $_POST;
$res = $obj->add("week",$data);
if($res){
	echo '<script>alert("添加成功");location.href="./show.php"</script>';
}else{
	echo '<script>alert("添加失败");location.href="./add.php"</script>';
}
?>