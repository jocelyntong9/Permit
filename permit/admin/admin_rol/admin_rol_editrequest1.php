<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="admin_rol_editrequest.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Edit Request</title>
</head> 
<body>
    <!-- mainbar -->
    <div class="mainbar"> 
        <div class="a-logo"></div>
        <nav>
        <li><a href=../../logout.php><button type="submit" class="logout">LOG OUT</button></a></li>
        </nav>
    </div> 

    <?php 
        session_start();
        $id_admin= $_SESSION[ 'id_admin' ];
        include '../../class/init.php';

        //fetch admin data
        $a = new CRUD();
        $a->select("admin","*","id='$id_admin'");
        $result = $a ->sql;
        $data = mysqli_fetch_assoc($result);

        // fetch form data
        $formid = $_POST[ 'formid' ];
        $b = new CRUD();
        $b->select("request_on_leave","*","form_id=$formid");
        $form = $b->sql;
        $formdata = mysqli_fetch_assoc($form);

        // period
        $period = $formdata['period'];
        if ($period>1){
            $period = "Days";
        }elseif($period=1){
            $period = "Day";
        }
        
    ?>

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
            <button type="submit" class="a-menu"><a href="../admin_dashboard/admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-open"><a href="admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department_data.php">Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Edit Requests</d>
             <label class = "formid">Form ID: </label>
             <label class = "formid2">220101001 </label>
            
        </div>
        
        <div class="biodata">
            
            <label class="id1">ID</label>
            <label class="id2">:</label>
            <label class="id3"><?php echo  $formdata['id']; ?></label>
            <label class="position1">Position</label>
            <label class="position2">:</label>
            <label class="position3"><?php echo  $formdata['position']; ?></label>
            <label class="name1">Name</label>
            <label class="name2">:</label>
            <label class="name3"><?php echo  $formdata['name']; ?></label>
            <label class="department1">Department</label>
            <label class="department2">:</label>
            <label class="department3"><?php echo  $formdata['department']; ?></label>
                     
                 
        </div>

        <div class="content"> 
          
            <div class="form">
                <form method="POST" action="edit.php"> 
                        <label class ="l-date1">Date</label>
                        <label class="i-date1" id="date1" name="date1" ><?php echo  $formdata['on_leave_from']; ?></label>
                        <label class ="l-date2">-</label>    
                        <label type="Date" class="i-date2" id="date2" name="date2" disabled><?php echo  $formdata['on_leave_from'].' '.$formdata['period']. ' '.$period; ?></label>
                
                        <label class ="l-tol">Type of Leave</label>
                        <label class="type"><?php echo  $formdata['type_of_leave']; ?></label>
                                     
                        <label class ="l-approvement">Approvement By</label>
                        <input type="text" value="<?php echo  $formdata['approvement_by']; ?>" class="i-approvement" id="approvement" name="approvement" disabled>
                        <input type="hidden" name="approvement">
                
                        <label class ="l-rol">Reason of Leave</label>
                        <textarea class="i-rol" name="rol" cols="21" rows='4'><?php echo  $formdata['reason_of_leave']; ?></textarea>
                        <input type="hidden" name="formid" value=<s?php echo $formid;?>> 
                        <button type="approve" class="Approve" name="approve">Approve</button>
                        <button type="Reject" class="Reject" name="reject">Reject</button>
                        <a href="admin_rol.php"><button type="Cancel" class="Cancel"><a href="admin_rol.php">Cancel</button></a>
            </form>
            </div>
            
        </div>

</body>
</html>
