<?php
header("content-type:text/html;charset=utf-8");
require './db.class.php';
$obj = new Db();
$id = $_GET['id'];
$where = array("id"=>$id);
$data = $obj->find("week",$data);
// $res = $obj->add("week",$data);
if($res){
	echo '<script>alert("删除成功");location.href="./show.php"</script>';
}else{
	echo '<script>alert("删除失败");location.href="./show.php"</script>';
}
?>