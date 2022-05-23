<?php
session_start();
include '../../class/init.php';

if (isset($_POST[ 'submit' ])) {
    $id = $_POST[ 'id' ];
    $name = $_POST[ 'name' ];
    $position = $_POST[ 'position' ];
    $department = $_POST[ 'department' ];
    $form_id = $_POST['form_id'];
    $on_leave_from = ($_POST[ 'date1' ]);
    $on_leave_to = ($_POST[ 'date2' ]);
    $period = $_POST[ 'period' ];
    $type_of_leave = $_POST[ 'type_of_leave' ];
    $rol = $_POST[ 'rol' ];
    $approvement_by = $_POST[ 'approvement' ];

    $date1 = new DateTime($on_leave_from);
    $date2 = new DateTime($on_leave_to);
    $interval = ($date2)->diff(($date1))->days+1;

if ($period != $interval){
    echo "<script type='text/javascript'>alert('Failed! Period Is Incorrect');window.location.href='user_rol.php';</script>";
}else{
    $a = new CRUD();
        $a->insert('request_on_leave',['id'=>$id,'name'=>$name,'position'=>$position,'department'=>$department,
        'form_id'=>$form_id,'on_leave_from'=>$on_leave_from,'on_leave_to'=>$on_leave_to,'period'=>$period,'type_of_leave'=>$type_of_leave,
        'reason_of_leave'=>$rol,'approvement_by'=>$approvement_by,'status'=>'Pending']);
        if ($a == true) {
            echo "<script type='text/javascript'>alert('On Leave Form Submitted!');window.location.href='admin_rol.php';</script>";

        }
    }
}