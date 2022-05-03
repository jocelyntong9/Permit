<?php 
    include '../../class/init.php';
    $formid = $_POST[ 'formid' ];
    $a = new CRUD();

    if (isset($_POST[ 'approve' ])){
        $a -> update('request_on_leave',['status'=>'Approved'],"form_id='$formid'");
        if ($a == true){    
            echo "<script type='text/javascript'>alert('Form Approved!');window.location.href='admin_rol.php';</script>";
        }
        
    }
        
        
    if (isset($_POST[ 'reject' ])){
        $a -> update('request_on_leave',['status'=>'Reject'],"form_id='$formid'");
        if ($a == true){
            echo "<script type='text/javascript'>alert('Form Rejected!');window.location.href='admin_rol.php';</script>";
        }
        
    }

?>