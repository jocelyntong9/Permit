<?php

include '../../../class/init.php';

if (isset($_POST['submit'])) {
    if (isset($_POST['id']) && isset($_POST['department_name'])&& isset($_POST['head_of_department'])) {
        if (!empty($_POST['id']) && !empty($_POST['department_name'])&& !empty($_POST['head_of_department']) ) {
            $id = $_POST['id'];
            $department_name = $_POST['department_name'];
            $head_of_department = $_POST['head_of_department'];
            
            $a = new CRUD();
            $a -> insert('department',['id'=>$id, 'department_name'=>$department_name,'head_of_department'=>$head_of_department]);
            if ($a == true) {
                echo "<script type='text/javascript'>alert('Department has been added!');window.location.href='department_data.php';</script>";
            }else{
                echo "<script type='text/javascript'>alert('Data Failed To Insert! Please Try Again!');window.location.href='department_data.php';</script>";
            }
        }else{
            echo "<script type='text/javascript'>alert('Please insert complete department data!');window.location.href='department_data.php';</script>";
        }
    }
}
		