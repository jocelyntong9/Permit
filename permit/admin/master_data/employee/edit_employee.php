<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="employee_action.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Edit Employee</title>
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
            <button type="submit" class="a-menu"><a href="../../admin_dashboard/admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../../admin_rol/admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-open"><a href="employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../department/department_data.php">Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Edit Employee</d>
            <a href ="employee_data.php"><button class="return">Return</button></a>
        </div>
        <div class="content"> 
            <fieldset>
                <div class="test">
                <table border="0" bordercolor="#c9c9c9" width="100%" cellspacing ="0" class="table1">
                    <tr>
                       <td>
                            <div class="profile"></div>
                        </td>
                    </tr>
                    <tr>
                       <td>
                            Profile Picture
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="upload">Upload Photo</button>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="remove">Remove Photo</button>  
                        </td>
                    </tr>
                </table>
                </div>
                <?php
                    include 'model_employee.php';
                    $model = new Model();
                    $id = $_REQUEST['id'];
                    $row = $model->edit($id);

                    if (isset($_POST['update'])) {
                        if (isset($_POST['name']) && isset($_POST['department']) && isset($_POST['position']) && isset($_POST['contact'])&& isset($_POST['date_of_birth']) && isset($_POST['email']) && isset($_POST['gender'])) {                        
                            if (!empty($_POST['name'])&& !empty($_POST['department']) && !empty($_POST['position']) && !empty($_POST['contact'])&& !empty($_POST['date_of_birth']) && !empty($_POST['email']) && !empty($_POST['gender'])) {     
                                $data['id'] = $id;
                                $data['name'] = $_POST['name'];
                                $data['department'] = $_POST['department'];
                                $data['position'] = $_POST['position'];
                                $data['contact'] = $_POST['contact'];
                                $data['date_of_birth'] = $_POST['date_of_birth'];
                                $data['email'] = $_POST['email'];
                                $data['gender'] = $_POST['gender'];

                            $update = $model->update($data);

                        if($update){
                            echo "<script type='text/javascript'>alert('Employee has been edited!');window.location.href='employee_data.php';</script>";
                        }else{
                            echo "<script type='text/javascript'>alert('Please try again!');window.location.href='employee_data.php';</script>";
                        }

                        }else{
                            echo "<script type='text/javascript'>alert('Empty data!');window.location.href='employee_data.php';</script>";
                        }
                    }
                    }

                    ?>
                <div class="test2">
                    <form method="POST">
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
                       <td colspan="2" width= "350px">
                            <input type="text" class="form" id="name" name="name" value="<?php echo $row['name']; ?>">
                        </td>
                        <td width= "350px">
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                            <input type="number" class="form" id="id" name="id" value="<?php echo $row['id']; ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            <br>
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
                        <td width="130px">
                            <select class="form2" id="department" name="department">
                                <option disabled selected><?php echo $row['department']; ?> </option>
                                    <?php $all= new model(); $all->selectDepartment();?>
                                </option>
                            </select>
                        </td>
                        <td width="130px">
                            <input type="text" class="form1" id="position" name="position" value="<?php echo $row['position']; ?>" >
                        </td>
                        <td width= "350px">
                            <input type="number" class="form" id="contact" name="contact"  value="<?php echo $row['contact']; ?>" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            <br>
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
                        <td colspan="2" width= "350px">
                            <input type="date" class="form" id="date_of_birth" name="date_of_birth"  value="<?php echo $row['date_of_birth']; ?>" >
                        </td>
                        <td width= "350px">
                            <input type="email" class="form" id="email" name="email"  value="<?php echo $row['email']; ?>" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            Gender
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            <select class="form3" id="gender" name="gender">
                                    <option disabled selected><?php echo $row['gender']; ?> </option>
                                    <?php $all= new model(); $all->selectGender();?>
                                    </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit" name="update" class="save">Save</button>  
                        </td>
                    </tr>
                </table>
                </form>
                </div>
            </fieldset>
        </div>
</body>
</html>
