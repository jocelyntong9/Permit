<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="admin_rol_addrequest.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Add Request</title>
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
            <button type="submit" class="a-menu"><a href="../admin_dashboard/admin_dashboard.php">&ensp;Dashboard</a></button>               
            <button type="submit" class="a-open"><a href="admin_rol.php">&ensp;On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../admin_report/admin_report.php">&ensp;Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">&ensp;Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department_data.php">&ensp;Department's Data</a></button>
    
    </div>
<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Add Requests</d>
             <label class = "formid">Form ID: </label>
             <label class = "formid2">220101001 </label>
            
        </div>
        
        <div class="biodata">
            
            <label class="id1">ID</label>
            <label class="id2">:</label>
            <label class="id3">000006</label>
            <label class="position1">Position</label>
            <label class="position2">:</label>
            <label class="position3">IT Staff</label>
            <label class="name1">Name</label>
            <label class="name2">:</label>
            <label class="name3">Vincent Wijaya</label>
            <label class="department1">Department</label>
            <label class="department2">:</label>
            <label class="department3">IT</label>
                     
                 
        </div>

        <div class="content"> 
          
            <div class="form">
                <form method="POST">

                        <label class ="l-period1">Period</label>
                        <input type="number" class="i-period" id="period" name="period">
                        <input type="hidden"  name="period">
                        <label class ="l-period2">Days</label>
                    
                        <label class ="l-date1">Date</label>
                        <input type="Date" class="i-date1" id="date1" name="date1" required>
                        <label class ="l-date2">-</label>    
                        <input type="Date" class="i-date2" id="date2" name="date2" required>
                
                        <label class ="l-tol">Type of Leave</label>
                        <select name="lokasi" class="i-tol">
                            <option disabled selected> Choose One</option>
                            <option value=>Annual Leave </option> 
                            <option value=>Sick Leave</option> 
                            <option value=>Unpaid Absence</option> 
                        </select>
                                     
                        <label class ="l-approvement">Approvement By</label>
                        <input type="text" value="Susi" class="i-approvement" id="approvement" name="approvement" disabled>
                        <input type="hidden" name="approvement">
                
                        <label class ="l-rol">Reason of Leave</label>
                        <textarea class="i-rol" name="rol" cols="21" rows='4'></textarea>

                        <button type="submit" class="submit">Submit</button> 
                                 
            </form>
            </div>
            
        </div>

</body>
</html>
