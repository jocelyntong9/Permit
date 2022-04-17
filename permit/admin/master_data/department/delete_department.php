<?php 

	include 'model_department.php';
	$model = new Model();
	$id = $_REQUEST['id'];
	$delete = $model->delete($id);

	if ($delete) {
        echo "<script type='text/javascript'>alert('Department has been deleted!');window.location.href='department_data.php';</script>";
	}

 ?>