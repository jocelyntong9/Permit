<?php

    include '../../../class/init.php';
    $a = new CRUD();

    if (isset($_POST['update'])) {
        if (isset($_POST['name']) && isset($_POST['department']) && isset($_POST['position']) && isset($_POST['contact'])&& isset($_POST['date_of_birth']) && isset($_POST['email']) 
        && isset($_POST['gender']) && isset($_POST['username']) && isset ($_POST['password']) && isset ($_POST['head_of_department'])) {                        
            if (!empty($_POST['name'])&& !empty($_POST['department']) && !empty($_POST['position']) && !empty($_POST['contact'])&& !empty($_POST['date_of_birth']) && isset($_POST['email']) 
            && !empty($_POST['gender']) && !empty($_POST['username']) && !empty($_POST['password'] && !empty($_POST['head_of_department']))) {     
                $id = $_POST['id'];
                $name = $_POST['name'];
                $department = $_POST['department'];
                $position = $_POST['position'];
                $contact = $_POST['contact'];
                $date_of_birth = $_POST['date_of_birth'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $username =$_POST['username'];
                $password = $_POST['password'];
                
                $a -> select("department","*","department_name='$department'");

                $result = $a -> sql;
                $data = mysqli_fetch_array($result);
                $head_of_department = $data['head_of_department'];

                $a -> update('user',['id'=>$id,'name'=>$name,'department'=>$department,'position'=>$position,'contact'=>$contact,
                'date_of_birth'=>$date_of_birth,'email'=>$email,'gender'=>$gender,'username'=>$username,'head_of_department'=>$head_of_department],"id='$id'");
                
                $a->update('user_login',['password'=>$password],"id='$id'");
        
        if($a==true){
            echo "<script type='text/javascript'>alert('Employee has been edited!');window.location.href='employee_data.php';</script>";
        }else{
            echo "<script type='text/javascript'>alert('Please try again!');window.location.href='employee_data.php';</script>";
        }

        }else{
            echo "<script type='text/javascript'>alert('Empty data!');window.location.href='employee_data.php';</script>";
        }
    }
    }

    if(isset($_POST['save'])){
        if (isset($_FILES['photo'])) {     
            if (!empty($_FILES['photo'])) { 
                $id = $_POST['id'];
                $photo = $_FILES['photo']['name'];
                $path = "../../../image/".$photo;
                $tmp = $_FILES['photo']['tmp_name'];
                $a -> update('user',['photo'=>$photo],"id='$id'");
                
                if($a==true){
                    $b =move_uploaded_file($tmp, $path);
                    if ($b == true){
                        echo "<script type='text/javascript'>alert('Profile Picture has been saved!');window.location.href='employee_data.php';</script>";
                    }
                }
            }
            else{
                echo "<script type='text/javascript'>alert('Please try again!');window.location.href='employee_data.php';</script>";
            }
            
        }
    }

?>
