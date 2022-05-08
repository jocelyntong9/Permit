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
            <li><a href=../../logout.php><button type="submit" class="logout">LOG OUT</button></a></li>
        </nav>
    </div> 
    <?php 
        session_start();
	    if($_SESSION['status']!="login"){
		    echo "<script type='text/javascript'>alert('Please login first!!!');window.location.href='../../login.php';</script>";
	    }
        $id_admin= $_SESSION[ 'id_admin' ];
        include '../../class/init.php';

        $a = new CRUD();
        $a->select("admin","*","id='$id_admin'");
        $result = $a ->sql;

        $data = mysqli_fetch_assoc($result);
    ?>

 <!-- sidebar -->
 <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
            <button type="submit" class="a-open"><a href="admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../admin_rol/admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department/department_data.php">Department's Data</a></button>
    </div>

<!-- kontent -->
<div class="a-main">
        <div class="top">
             <d>Admin Profile</d>
        </div>
        <div class="content"> 
            <fieldset>
                <form method="POST" enctype="multipart/form-data" action ="editprofile.php">
                <div class="test">
                <table border="0" bordercolor="#c9c9c9" width="100%" cellspacing ="0" class="table1">
                    <tr>
                       <td>
                            <div>
                                <input type="hidden" name="id" value="<?php echo $data['id'];?>" >
                                <image class="profile" src="<?php echo "../../image/".$data['photo'];?>"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                       <td style="padding-bottom: 10px">
                            Profile Picture
                        </td>
                    </tr>
                </table>
                </form>
                </div>

                <div class="test2">
                    <form method="POST" action="editprofile.php">
                    <table border="0" bordercolor="#c9c9c9" width="100%" cellspacing ="0" class="table2">
                    <tr>
                       <td colspan="2" width= "350px">
                           Name
                        </td>
                        <td  width= "350px">
                           ID
                        </td>
                    </tr>
                    <tr>
                       <td colspan="2" width= "350px" style="padding-bottom: 20px">
                            <input type="text" class="form" id="name" name="name" value="<?php echo $data['name']; ?>" disabled>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>" >
                            <input type="number" class="form" id="id" name="id" value="<?php echo $data['id']; ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">

                        </td>
                    </tr>
                    <tr>
                        <td width="130px">
                            Department
                        </td>
                        <td width= "130px">
                            Position
                        </td>
                        <td width= "350px">
                            Contact
                        </td>
                    </tr>
                    <tr>
                        <td width="130px" style="padding-bottom: 20px">
                            <select name="department" id="department" class="form2"  required>
                            <option value="<?php echo $data['department'];?>" selected><?php echo $data['department'];?></disabled>
                            <?php
                            //fetch department list
                            $a -> select('department','*');
                            $query = $a ->sql;
                            while ($row = mysqli_fetch_array($query)){
                                echo "<option> $row[1] </option>";
                            }
                            ?>
                            </option>
                            </select>
                        </td>
                        <td width="130px" style="padding-bottom: 20px">
                            <input type="text" class="form1" id="position" name="position" value="<?php echo $data['position']; ?>" disabled>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="number" class="form" id="contact" name="contact"  value="<?php echo $data['contact']; ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            Date of Birth
                        </td>
                        <td width= "350px">
                            Email
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px" style="padding-bottom: 20px">
                            <input type="date" class="form" id="date_of_birth" name="date_of_birth"  value="<?php echo $data['date_of_birth']; ?>" disabled>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="email" class="form" id="email" name="email"  value="<?php echo $data['email']; ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            Gender
                        </td>
                        <td  width= "350px">
                            Username
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px" style="padding-bottom: 22px">
                            <select name="gender" id="gender" class="form3" required>
                            <option value="<?php echo $data['gender'];?>" selected><?php echo $data['gender'];?></disabled>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px" colspan="2">
                            <input type="hidden"  id="username" name="username"  value="<?php echo $data['username']; ?>" disabled>
                            <input type="text" class="form" value="<?php echo $data['username']; ?>" disabled >
                        </td>
                    </tr>
                    
                    <td colspan="2" width= "350px">
                            
                        </td>
                    <tr>
                        <td colspan="3">
                            <button type="submit" name="update" class="save">Edit</button>  
                        </td>
                    </tr>
                </table>
                </form>
                </div>
            </fieldset>
        </div>

    <div class="chartBox">
        <e>On Leave per Month</e>
    <canvas id="myChart"></canvas>
    </div>

    <div class="pieBox">
        <f>On Leave Per Department</f>
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
                        $a->select("request_on_leave","*","department='Maintenance' AND status='Approved'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    ,<?php 
                        $a->select("request_on_leave","*","department='Finance' AND status='Approved'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    ,<?php 
                        $a->select("request_on_leave","*","department='Production' AND status='Approved'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    , <?php 
                        $a->select("request_on_leave","*","department='IT' AND status='Approved'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    , <?php 
                        $a->select("request_on_leave","*","department='Customer Service' AND status='Approved'");
                        $result = $a ->sql;
                        $total = mysqli_num_rows($result);
                        echo $total;
			        ?>
                    ,<?php 
                        $a->select("request_on_leave","*","department='Administration' AND status='Approved'");
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
