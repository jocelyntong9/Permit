<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="admin_dashboard2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .chartBox {
            width : 700px;
            padding : 12px;
            text-align : center; 
            float : left;
        }
        .pieBox {
            width: 400px;
            padding : 12px;
            text-align : center;
            float : right;
        }
    </style>

    <title>Permit</title>
</head>
<body>
    <!-- mainbar -->
    <div class="mainbar"> 
        <div class="a-logo"></div>
        <nav>
           <li><button type="submit" class="logout"><a href=../../logout.php>LOG OUT</a></button></li>
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
            <form action="editprofile.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" name="name" value=<?php echo $data[ 'name' ];?> disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">ID</span>
                        <input type="text" name="id" value=<?php echo $data[ 'id' ];?> disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Department</span>
                        <input type="text" name="department" value=<?php echo $data[ 'department' ];?> disaled>
                    </div>
                    <div class="input-box">
                        <span class="details">Position</span>
                        <input type="text" name="position" value=<?php echo $data[ 'position' ];?> disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text" name="contact" value=<?php echo $data[ 'contact' ];?> disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="date" name="date_of_birth" value=<?php echo $data[ 'date_of_birth' ];?> disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" value=<?php echo $data[ 'email' ];?> disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Gender</span>
                        <input type="text" name="gender" value=<?php echo $data[ 'gender' ];?> disabled>
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit" class="a-open">Edit</a></button> 
                </div>  
            </form>
        </div>
    </div>

    <div class="chartBox">
        <e>On Leave per Month</e>
    <canvas id="myChart"></canvas>
    </div>

    <div class="pieBox">
        <f>On Leave Per Departmentt</f>
    <canvas id="pieChart"></canvas>
    </div>

    <?php
        $date= mktime(date("m"),date("d"),date("Y"));
        date_default_timezone_set('Asia/Jakarta');
        $hour= date("H:i:s");
        $date= date("d-M-Y", $date). $hour ;
    ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

    // setup
    const data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: '2022 On Leave Taken Per Month',
                data: [
                    <?php 
                    $a->select_month("request_on_leave","on_leave_from","1");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
			        ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","2");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","3");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","4");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","5");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","6");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","7");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","8");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","9");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","10");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","11");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>
                ,<?php 
                    $a->select_month("request_on_leave","on_leave_from","12");
                    $result = $a ->sql;
                    $month = mysqli_num_rows($result);
                    echo $month;
                ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
    };

    // config
    const config = {
        type: 'bar',
        data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // render init block
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    // pie chart
    // data of pie chart
    const datapie = {
            labels: ['Maintenance', 'Finance', 'Production', 'IT', 'Customer Service','Administration'],
            datasets: [{
                label: 'Karyawan',
                data: [
                    <?php 
                        $a->select("request_on_leave","*","department='Maintenance'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    ,<?php 
                        $a->select("request_on_leave","*","department='Finance'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    ,<?php 
                        $a->select("request_on_leave","*","department='Production'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    , <?php 
                        $a->select("request_on_leave","*","department='IT'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    , <?php 
                        $a->select("request_on_leave","*","department='Customer Service'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    ,<?php 
                        $a->select("request_on_leave","*","department='Administration'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 2
            }]
    };

    // config pie
    const configpie = {
        type: 'pie',
        data : datapie,
        options: {}
    };

    // render or init of pie chart
    const pieChart = new Chart(
        document.getElementById('pieChart'),
        configpie
    );


    </script>

</body>
</html>
