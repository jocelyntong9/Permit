<?php 

	include '../../../class/init.php';
	$a = new CRUD();
	$id = $_REQUEST['id'];

	

	
	$a -> delete('department',"id='$id'");

	if ($a==true) {
        echo "<script type='text/javascript'>alert('Department has been deleted!');window.location.href='department_data.php';</script>";
	}

 ?>