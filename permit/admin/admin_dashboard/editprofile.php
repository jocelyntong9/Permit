<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="admin_dashboard2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Permit</title>
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
            <button type="submit" class="a-open"><a href="admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../admin_rol/admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department/department_data.php">Department's Data</a></button>
    </div>

<!-- kontent -->
<div class="a-main">
        <d>Admin Profile</d>
    <div class="container-utama">
        <div class="profilepic">
            <img src="../../image/profilepic.jpeg" width="200px" alt="">
            <center><h5>Profile picture</h5></center>
            <center><button type="submit">Upload photo</button><br></center>
            <center><button type="submit">Remove photo</button></center>
        </div>

        <?php 
            session_start();
            $id_admin= $_SESSION[ 'id_admin' ];
            include '../../class/init.php';

            $a = new CRUD();
            $a->select("admin","*","id='$id_admin'");
            $result = $a ->sql;

            $data = mysqli_fetch_assoc($result);
        ?>

<div class="container">
            <form action="edit.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" name="name" value=<?php echo $data[ 'name' ];?> >
                    </div>
                    <div class="input-box">
                        <span class="details">ID</span>
                        <input type="hidden" name="id" value=<?php echo $data[ 'id' ];?> >
                        <input type="text" value=<?php echo $data[ 'id' ];?> disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Department</span>
                        <input type="text" name="department" value=<?php echo $data[ 'department' ];?> disaled>
                    </div>
                    <div class="input-box">
                        <span class="details">Position</span>
                        <input type="text" name="position" value=<?php echo $data[ 'position' ];?> >
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text" name="contact" value=<?php echo $data[ 'contact' ];?> >
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="date" name="date_of_birth" value=<?php echo $data[ 'date_of_birth' ];?> >
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" value=<?php echo $data[ 'email' ];?> >
                    </div>
                    <div class="input-box">
                        <span class="details">Gender</span>
                        <input type="text" name="gender" value=<?php echo $data[ 'gender' ];?> >
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit" name ="submit" class="a-open">Edit</a></button> 
                </div>  
            </form>
        </div>
    </div>

</body>
</html>
