<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="user_rol3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Request On Leave</title>
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
        $id_user= $_SESSION[ 'id_user' ];
        echo $id_user;
        include '../../class/init.php';

        date_default_timezone_set("Asia/Jakarta");
        $date= date("Y-m-d");

        $a = new CRUD();
        $a -> select_max('request_on_leave','maxKode','form_id');
        $max = $a ->sql;
        $d = mysqli_fetch_array($max);
        $noOrder = $d['maxKode'];
        $noUrut = (int) substr($noOrder, 7, 3);
        $noUrut++;
        $tahun=substr($date, 2, 2);
        $bulan=substr($date, 5, 2);
        $hari =substr($date, 8,2);
        $id_Order = $tahun .$bulan . $hari . sprintf("%03s", $noUrut);

        
        
        $a->select("user","*","id='$id_user'");
        $result = $a ->sql;
        $data = mysqli_fetch_assoc($result);

    ?> 

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
            <button type="submit" class="a-menu"><a href="../user_profile/user_profile.php">Profile</a></button>               
            <button type="submit" class="a-open"><a href="user_rol.php">Request On Leave</a></button>
            <button type="submit" class="a-menu"><a href="../user_report/user_report.php">Report</a></button>
    
    </div>
<!-- kontent -->
    <form method="POST" action = rol.php>
    
    
    <div class="a-main">
        <div class="top">
             <d>Request On Leave</d>
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
                    <select name="type_of_leave" class="i-tol">
                        <option disabled selected> Choose One</option>
                        <option value='Annual Leave'>Annual Leave</option> 
                        <option value='Sick Leave'>Sick Leave</option> 
                        <option value='Unpaid Absence'>Unpaid Absence</option> 
                    </select>
                                    
                    <label class ="l-approvement">Approvement By</label>
                    <input type="text" value="<?php echo $data['head_of_department'];?>" class="i-approvement" id="approvement" name="approvement" disabled>
                    <input type="hidden" name="approvement" value=<?php echo $data['head_of_department'];?>>
            
                    <label class ="l-rol">Reason of Leave</label>
                    <textarea class="i-rol" name="rol" cols="21" rows='4'></textarea>

                    <button type="submit" class="submit" name="submit">Submit</button> 
    
                </div>
            
            </div>
        </form>

</body>
</html>
