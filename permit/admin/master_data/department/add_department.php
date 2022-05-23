<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="department_action.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Add Department</title>
</head>
<body>
    <!-- mainbar -->
    <div class="mainbar"> 
        <div class="a-logo"></div>
        <nav>
            <a href =../../../logout.php><li><button type="submit" class="logout">LOG OUT</button></li></a>
        </nav>
    </div> 
    <?php
        //fetch admin id
        session_start();
        $id_admin = $_SESSION[ 'id_admin' ];
        include '../../../class/init.php';

        //fetch admin name
        $a = new CRUD();
        $a->select("admin","*","id='$id_admin'");
        $admin = $a ->sql;
        $admindata = mysqli_fetch_assoc($admin);                  
    ?>
 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $admindata['name'];?></c>
            <button type="submit" class="a-menu"><a href="../../admin_dasbhoard/admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../../admin_rol/admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-open"><a href="department_data.php">Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Add Department</d>
            <a href ="department_data.php"><button class="return">Return</button></a>
        </div>

        <?php
            include '../../../class/init.php';
            $a = new CRUD();
            $a -> select_max('department','maxID','id');
            $result = $a ->sql;
            $data = mysqli_fetch_array($result);
        ?>

        <div class="content"> 
            <fieldset>
                <form method="POST" action ="add.php">
                <table border="0" bordercolor="#c9c9c9" width="100%" cellspacing ="0" class="table">
                    <tr>
                       <td>
                           ID
                        </td>
                        <td>
                           Head of Department
                        </td>
                    </tr>
                    <tr>
                       <td style="padding-bottom: 30px">
                            <input type="number" class="form" value=<?php echo $data['maxID']+1; ?> disabled>
                            <input type="hidden"  id="id" name="id" value =<?php echo $data['maxID']+1; ?> >
                        </td>
                        <td style="padding-bottom: 30px">
                            <input type="text" class="form" id="head_of_department" name="head_of_department" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Department
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 10px">
                            <input type="text" class="form" id="department_name" name="department_name" required>
                        </td>
                    </tr>
                </table>
                    <button type="submit" name="submit" class="add">Add</button>  
                </form>
            </fieldset>
        </div>
</body>
</html>
