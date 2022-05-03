<?php 

	include '../../../class/init.php';
	$a = new CRUD();
	$id = $_REQUEST['id'];
	
	$a -> delete('user',"id='$id'");
	$a -> delete('user_login',"id='$id'");

	if ($a==true) {
        echo "<script type='text/javascript'>alert('User has been deleted!');window.location.href='employee_data.php';</script>";
	}

 ?>