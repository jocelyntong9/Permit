<?php

include '../../../class/init.php';
$a = new CRUD();

if (isset($_POST['update'])) {
    if (isset($_POST['department_name']) && isset($_POST['head_of_department'])) {                        
        if (!empty($_POST['department_name']) && !empty($_POST['head_of_department'])) {     
            $id = $_POST['id'];
            $department_name = $_POST['department_name'];
            $head_of_department = $_POST['head_of_department'];
            
            $a -> update('department',['department_name'=>$department_name,'head_of_department'=>$head_of_department],"id='$id'");
            $a -> update ('user',['head_of_department'=>$head_of_department,'department'=>$department_name],"id='$id'");
        
    if($a == true){
        echo "<script type='text/javascript'>alert('Department name has been edited!');window.location.href='department_data.php';</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Please try again!');window.location.href='department_data.php';</script>";
    }

    }
    else{
        echo "<script type='text/javascript'>alert('Empty data!');window.location.href='department_data.php';</script>";
    }
}
}

?>
