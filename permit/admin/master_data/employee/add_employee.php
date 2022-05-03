<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="employee_action1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Add Employee</title>
</head>
<body>
    <!-- mainbar -->
    <div class="mainbar"> 
        <div class="a-logo"></div>
        <nav>
            <a href =../../../logout.php><li><button type="submit" class="logout">LOG OUT</button></li></a>
        </nav>
    </div> 
 <!-- sidebar -->
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
     
    <div class="a-sidebar">
            <c>Welcome, <?php echo $admindata['name'];?></c>
            <button type="submit" class="a-menu"><a href="../../admin_dashboard/admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../../admin_rol/admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-open"><a href="employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../department/department_data.php">Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Add Employee</d>
            <a href ="employee_data.php"><button class="return">Return</button></a>
        </div>
        <div class="content"> 
            <fieldset>
                <div class="test">
                <?php

                    //fetch max id
                    include '../../../class/init.php';
                    $a = new CRUD();
                    $a -> select_max('user','maxID','id');
                    $result = $a ->sql;
                    $data = mysqli_fetch_array($result);
                ?>
                <form method="POST" enctype="multipart/form-data" action ="add.php">
                <table border="0" bordercolor="#c9c9c9" width="100%" cellspacing ="0" class="table1">
                    <tr>
                       <td>
                            <div>
                                <image class="profile" src="../../../image/avatar.png"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                       <td style="padding-bottom: 10px">
                            Profile Picture
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="photo" id="photo" name="photo" type="file" accept=".jpg,.jpeg,.png">
                        </td>
                    </tr>
                </table>
                </div>

                <div class="test2">
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
                            <input type="text" class="form" id="name" name="name" required>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="number" class="form" value=<?php echo $data['maxID']+1; ?> disabled>
                            <input type="hidden"  id="id" name="id" value =<?php echo $data['maxID']+1; ?> >
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
                        <select class="form2" id="department" name="department" required>
                            <option disabled selected>  </option>
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
                            <input type="text" class="form1" id="position" name="position" required>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="number" class="form" id="contact" name="contact" required>
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
                            <input type="date" class="form" id="date_of_birth" name="date_of_birth" required>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="email" class="form" id="email" name="email" required>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="text" class="form" id="username" name="username" required>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="text" class="form" id="password" name="password" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            Gender
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px" style="padding-bottom: 22px">
                            <select class="form3" id="gender" name="gender" required>
                                <option disabled selected>Choose Gender  </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" name="submit" class="add">Add</button>  
                        </td>
                    </tr>
                </table>
                </form>
                </div>
            </fieldset>
        </div>
</body>
</html>
