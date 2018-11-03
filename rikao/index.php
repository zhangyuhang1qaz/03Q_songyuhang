<?php 
header("content-type:text/html;charset=utf-8");
	require './Fly.php';
	$obj = new Fly();
	$id = $_GET['id'];
	$where = array("id"=>$id);
	$data = $obj->find("day",$where);
	
	$ticket = $data[0]['ticket'];
	// print_r($data);die;
	if($ticket>0){
		$value = array("ticket"=>$ticket-1);
		$res = $obj->update("day",$value,$where);
		if($res){
			echo '<script>alert("抢票成功");location.href="./show.php"</script>';
		}
	}else{
		echo '<script>alert("对不起，没票了");location.href="./show.php"</script>';
	}
	


?>
