<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="user_rol.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Request On Leave</title>
</head>
<body>
 <!-- mainbar -->
    <div class="mainbar"> 
        <div class="a-logo"></div>
        <button type="submit" class="logout">LOG OUT</button>
    </div> 

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, nama</c>
            <button type="submit" class="a-menu"><a href="../user_profile/user_profile.php">&ensp;Profile</a></button>               
            <button type="submit" class="a-open"><a href="user_rol.php">&ensp;Request On Leave</a></button>
            <button type="submit" class="a-menu"><a href="../user_report/user_report.php">&ensp;Report</a></button>
    
    </div>
<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Request On Leave</d>
             <label class = "formid">Form ID: </label>
             <label class = "formid2">220101001 </label>
            
        </div>
        
        <div class="biodata">
            
            <label class="id1">ID</label>
            <label class="id2">:</label>
            <label class="id3"><?php echo "00001";?></label>
            <label class="position1">Position</label>
            <label class="position2">:</label>
            <label class="position3"><?php echo "Accounting";?></label>
            <label class="name1">Name</label>
            <label class="name2">:</label>
            <label class="name3"><?php echo "Eric";?></label>
            <label class="department1">Department</label>
            <label class="department2">:</label>
            <label class="department3"><?php echo "Finance";?></label>
                     
                 
        </div>

        <div class="content"> 
          
            <div class="form">
                <form method="POST">

                        <label class ="l-period1">Period</label>
                        <input type="number" class="i-period" id="period" name="period" disabled>
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
                        <input type="text" value="Johan" class="i-approvement" id="approvement" name="approvement" disabled>
                        <input type="hidden" name="approvement">
                
                        <label class ="l-rol">Reason of Leave</label>
                        <textarea class="i-rol" name="rol" cols="21" rows='4'></textarea>

                        <button type="submit" class="submit">Submit</button> 
                                 
            </form>
            </div>
            
        </div>

</body>
</html>