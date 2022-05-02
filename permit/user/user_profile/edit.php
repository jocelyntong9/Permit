<?php 
    include '../../class/init.php';


    if (isset($_POST[ 'submit' ])) {
        $id = $_POST[ 'id' ];
        $name = $_POST[ 'name' ];
        $department = $_POST[ 'department' ];
        $position = $_POST[ 'position' ];
        $contact = $_POST[ 'contact' ];
        $date_of_birth = $_POST[ 'date_of_birth' ];
        $email = $_POST[ 'email' ];
        $gender = $_POST[ 'gender' ];

        $a = new CRUD();
        $a->update('admin',['name'=>$name,'department'=>$department,'position'=>$position,'contact'=>$contact,
        'date_of_birth'=>$date_of_birth,'email'=>$email,'gender'=>$gender],"id='$id'");
        if ($a == true) {
            echo "<script type='text/javascript'>alert('Data Has Been Updated!');window.location.href='admin_dashboard.php';</script>";
        }
    }
?>