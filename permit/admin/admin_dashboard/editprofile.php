<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="editprofile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
             <d>Edit Profile</d>
            <a href ="admin_dashboard.php"><button class="return">Return</button></a>
        </div>
        <div class="content"> 
            <fieldset>
            <?php
                include '../../class/init.php';
                $id = $_REQUEST['id'];
                $a = new CRUD();
                $a -> select("admin","*","id='$id'");
                $result = $a -> sql;
                $data = mysqli_fetch_array($result);

                $b = new CRUD();
                $b-> select("admin_login","*","id='$id'");
                $password = $b -> sql;
                $passworddata = mysqli_fetch_array($password);

            ?>

                <form method="POST" enctype="multipart/form-data" action ="edit.php">
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
                    <tr>
                        <td style="padding-bottom: 20px;">
                            <input class="photo" name="photo" value="<?php echo $data['photo'];?>" type="file" accept=".jpg,.jpeg,.png">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="save" class="save2">Save Photo</button>  
                        </td>
                    </tr>
                </table>
                </form>
                </div>

                <div class="test2">
                    <form method="POST" action="admin_dashboard.php">
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
                            <input type="text" class="form" id="name" name="name" value="<?php echo $data['name']; ?>">
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
                            <option value="<?php echo $data['department'];?>" selected><?php echo $data['department'];?></option>
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
                            <input type="number" class="form" id="contact" name="contact"  value="<?php echo $data['contact']; ?>" >
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
                            <input type="date" class="form" id="date_of_birth" name="date_of_birth"  value="<?php echo $data['date_of_birth']; ?>" >
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="email" class="form" id="email" name="email"  value="<?php echo $data['email']; ?>" >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px">
                            Gender
                        </td>
                        <td  width= "350px">
                            Password
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width= "350px" style="padding-bottom: 22px">
                            <select name="gender" id="gender" class="form3" required>
                            <option value="<?php echo $data['gender'];?>" selected><?php echo $data['gender'];?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </td>
                        <td width= "350px" style="padding-bottom: 20px">
                            <input type="text" class="form" id="password" name="password"  value="<?php echo $passworddata['password']; ?>" >
                        </td>
                    </tr>
                    
                    <td colspan="2" width= "350px">
                            Username
                        </td>
                    <tr>
                        <td width= "350px" style="padding-bottom: 20px" colspan="2">
                            <input type="hidden"  id="username" name="username"  value="<?php echo $data['username']; ?>" >
                            <input type="text" class="form" value="<?php echo $data['username']; ?>" disabled >
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
