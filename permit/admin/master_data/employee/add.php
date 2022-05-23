<?php

include '../../../class/init.php';
$a = new CRUD();

if (isset($_POST['submit'])) {
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['department']) && isset($_POST['position']) && isset($_POST['contact'])&& isset($_POST['date_of_birth']) && isset($_POST['email']) && isset($_POST['gender'])) {
        if (!empty($_POST['id']) && isset($_POST['name']) && isset($_POST['department']) && isset($_POST['position']) && isset($_POST['contact'])&& isset($_POST['date_of_birth']) && isset($_POST['email']) && isset($_POST['gender'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $department = $_POST['department'];
            $position = $_POST['position'];
            $contact = $_POST['contact'];
            $date_of_birth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $photo = $_FILES['photo']['name'];
            $tmp = $_FILES['photo']['tmp_name'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $path = "../../../image/".$photo;

            $a -> select("department","*","department_name='$department'");
            $result = $a -> sql;
            $data = mysqli_fetch_array($result);
            $total_employee = $data['total_employee'];
            $total_employee += 1;
            $head_of_department = $data['head_of_department'];

            $a->insert('user',['id'=>$id,'name'=>$name,'department'=>$department,'position'=>$position,'contact'=>$contact,'date_of_birth'=>$date_of_birth,
            'email'=>$email,'gender'=>$gender,'photo'=>$photo,'username'=>$username,'head_of_department'=>$head_of_department]);
            $a->insert('user_login',['id'=>$id,'username'=>$username,'password'=>$password]);
            if ($a==true) {
                move_uploaded_file($tmp, $path);
                
                $a -> update("department",["total_employee"=>$total_employee],"department_name='$department'");
                echo "<script type='text/javascript'>alert('Employee has been added!');window.location.href='employee_data.php';</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Failed to Insert! Please Try again!');window.location.href='employee_data.php';</script>";
            }
        }
        
        else{
            echo "<script type='text/javascript'>alert('Please insert employee data!');window.location.href='employee_data.php';</script>";
        }
    }	
}	