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
           <li><button type="submit" class="logout">LOG OUT</button></li>
        </nav>
    </div> 

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, nama</c>
            <button type="submit" class="a-menu"><a href="../user_profile/user_profile.php">Profile</a></button>               
            <button type="submit" class="a-open"><a href="user_rol.php">Request On Leave</a></button>
            <button type="submit" class="a-menu"><a href="../user_report/user_report.php">Report</a></button>
    
    </div>
<!-- kontent -->
    <form method="POST" action = rol.php>
    
    <?php 
        session_start();
        include '../../class/init.php';

        date_default_timezone_set("Asia/Jakarta");
        $date= date("Y-m-d");
        $connection = mysqli_connect("localhost", "root", "", "permit");
        
        $query =mysqli_query($connection, "SELECT max(form_id) as maxKode FROM request_on_leave");
        $d = mysqli_fetch_array($query);
        $noOrder = $d['maxKode'];
        $noUrut = (int) substr($noOrder, 7, 3);
        $noUrut++;
        $tahun=substr($date, 0, 4);
        $bulan=substr($date, 5, 2);
        $id_Order = $tahun .$bulan . sprintf("%03s", $noUrut);

        
        $a = new CRUD();
        $a->select("user","*","username='Eric'");
        $result = $a ->sql;
        $data = mysqli_fetch_assoc($result);

    ?>  


    <div class="a-main">
        <div class="top">
             <d>Request On Leave</d>
             <label class = "formid">Form ID: </label>
             <input type="text" name="form_id" class = "formid2" value=<?php echo $id_Order;?>>
            
        </div>
        
            <div class="biodata">

                <label class="id1">ID</label>
                <label class="id2">:</label>
                <input type="text" name="id" class="id3" value=<?php echo $data['id'];?>>
                <label class="position1">Position</label>
                <label class="position2">:</label>
                <input type="text" name="position" class="position3" value=<?php echo $data['position'];?>>
                <label class="name1">Name</label>
                <label class="name2">:</label>
                <input type="text" name="name" class="name3" value=<?php echo $data['name'];?>>
                <label class="department1">Department</label>
                <label class="department2">:</label>
                <input type="text" name="department" class="department3" value=<?php echo $data['department'];?>>
                        
                    
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
                        <option value=>Annual Leave </option> 
                        <option value=>Sick Leave</option> 
                        <option value=>Unpaid Absence</option> 
                    </select>
                                    
                    <label class ="l-approvement">Approvement By</label>
                    <input type="text" value="Johan" class="i-approvement" id="approvement" name="approvement" disabled>
                    <input type="hidden" name="approvement">
            
                    <label class ="l-rol">Reason of Leave</label>
                    <textarea class="i-rol" name="rol" cols="21" rows='4'></textarea>

                    <button type="submit" class="submit" name="submit">Submit</button> 
    
                </div>
            
            </div>
        </form>

</body>
</html>
