<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="admin_rol_addrequest5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Add Request</title>
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

        date_default_timezone_set("Asia/Jakarta");
        $date= date("Y-m-d");
        $connection = mysqli_connect("localhost", "root", "", "permit");
        
        $query =mysqli_query($connection, "SELECT max(form_id) as maxKode FROM request_on_leave");
        $d = mysqli_fetch_array($query);
        $noOrder = $d['maxKode'];
        $noUrut = (int) substr($noOrder, 7, 3);
        $noUrut++;
        $tahun=substr($date, 2, 2);
        $bulan=substr($date, 5, 2);
        $hari =substr($date, 8,2);
        $id_Order = $tahun .$bulan . $hari . sprintf("%03s", $noUrut);

        
        $a = new CRUD();
        $a->select("admin","*","id='$id_admin'");
        $result = $a ->sql;
        $data = mysqli_fetch_assoc($result);

    ?> 

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
            <button type="submit" class="a-menu"><a href="../admin_dashboard/admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-open"><a href="admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department/department_data.php">Department's Data</a></button>
    
    </div>
<!-- kontent -->
    <form method="POST" action = rol.php>
    <div class="a-main">
        <div class="top">
             <d>Add Requests</d>
             <label class = "formid">Form ID: </label>
             <input type="hidden" name="form_id" value=<?php echo $id_Order;?>>
             <label class = "formid2" ><?php echo $id_Order;?></label>
            
        </div>
        
        <div class="biodata">
            
        <label class="id1">ID</label>
                <label class="id2">:</label>
                <label class="id3"><?php echo $data['id'];?></label>
                <input type="hidden" name="id" value=<?php echo $data['id'];?>>
                <label class="position1">Position</label>
                <label class="position2">:</label>
                <label class="position3"><?php echo $data['position'];?></label>
                <input type="hidden" name="position" value=<?php echo $data['position'];?>>
                <label class="name1">Name</label>
                <label class="name2">:</label>
                <label class="name3"><?php echo $data['name'];?></label>
                <input type="hidden" name="name" value=<?php echo $data['name'];?>>
                <label class="department1">Department</label>
                <label class="department2">:</label>
                <label class="department3" ><?php echo $data['department'];?></label>
                <input type="hidden" name="department" value=<?php echo $data['department'];?>>
                     
                 
        </div>

        <div class="content"> 
          
            <div class="form">

                <label class ="l-period1">Period</label>
                    <input type="number" name="period" class="i-period" id="period" name="period">
                    <label class ="l-period2">Days</label>
                
                    <label class ="l-date1">Date</label>
                    <input type="Date" class="i-date1" id="date1" name="date1" required>
                    <label class ="l-date2">-</label>    
                    <input type="Date" class="i-date2" id="date2" name="date2" required>
            
                    <label class ="l-tol">Type of Leave</label>
                    <select name="type_of_leave" class="i-tol" required>
                        <option disabled selected> Choose One</option>
                        <option value='Annual Leave'>Annual Leave</option> 
                        <option value='Sick Leave'>Sick Leave</option> 
                        <option value='Unpaid Absence'>Unpaid Absence</option> 
                    </select>
                                    
                    <label class ="l-approvement">Approvement By</label>
                    <input type="text" value="<?php echo $data['name'];?>" class="i-approvement" id="approvement" name="approvement" disabled>
                    <input type="hidden" name="approvement" value=<?php echo $data['name'];?>>
            
                    <label class ="l-rol">Reason of Leave</label>
                    <textarea class="i-rol" name="rol" cols="21" rows='4'></textarea>

                    <button type="submit" class="submit" name="submit">Submit</button>
                                 
            </form>
            </div>
            
        </div>

</body>
</html>
