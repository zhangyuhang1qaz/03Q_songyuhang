<?php 
header("content-type:text/html;charset=utf-8");
	require './Fly.php';
	$obj = new Fly();
	$data = $_POST;
	// print_r($data);die;
	// $active = $_POST['active'];
	// $d_active = $_POST['d_active'];
	// $ticket = $_POST['ticket'];
	$res = $obj->add("day",$data);
	// $res = mysql_query($sql);
	if($res){
			echo '<script>alert("添加成功");location.href="./show.php"</script>';
	}else{
		echo '<script>alert("添加失败");location.href="./show.php"</script>';
	}
	


?>