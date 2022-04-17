<?php 

	include 'model_employee.php';
	$model = new Model();
	$id = $_REQUEST['id'];
	$delete = $model->delete($id);

	if ($delete) {
        echo "<script type='text/javascript'>alert('Employee has been deleted!');window.location.href='employee_data.php';</script>";
	}

 ?>