<?php 

	include '../../../class/init.php';
	$a = new CRUD();
	$id = $_REQUEST['id'];

	$a -> select("user","*","id='$id'");
	$result = $a -> sql;
    $data = mysqli_fetch_array($result);
	$department = $data['department'];

	$a -> select("department","*","department_name='$department'");
	$result = $a -> sql;
	$data = mysqli_fetch_array($result);
	$total_employee = $data['total_employee'];
	$total_employee -= 1;

	
	$a -> delete('user',"id='$id'");
	$a -> delete('user_login',"id='$id'");

	if ($a==true) {
		$a -> update("department",["total_employee"=>$total_employee],"department_name='$department'");
        echo "<script type='text/javascript'>alert('User has been deleted!');window.location.href='employee_data.php';</script>";
	}

 ?>