<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="user_profile2.css">
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
        $id_user = $_SESSION[ 'id_user' ];
        include '../../class/init.php';
        
        
        $a = new CRUD();
        $a->select("user","*","id='$id_user'");
        $result = $a ->sql;

        $data = mysqli_fetch_assoc($result);

    ?>

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
            <button type="submit" class="a-open"><a href="user_profile.php">Profile</a></button>               
            <button type="submit" class="a-menu"><a href="../user_rol/user_rol.php">Requests On Leave</a></button>
            <button type="submit" class="a-menu"><a href="../user_report/user_report.php">Report</a></button>
    </div>

<!-- kontent -->
<div class="a-main">
        <div class="top">
             <d>My Profile</d>
        </div>
        <div class="content"> 
            <fieldset>
            <?php
                include '../../class/init.php';
                $id = $_SESSION['id_user'];
                $a = new CRUD();
                $a -> select("user","*","id='$id'");
                $result = $a -> sql;
                $data = mysqli_fetch_array($result);
                $b = new CRUD();
                $b-> select("user_login","*","id='$id'");
                $password = $b -> sql;
                $passworddata = mysqli_fetch_array($password);

            ?>

                <form method="POST" enctype="multipart/form-data" action ="editprofileuser.php">
                <div class="test">
                <table border="0" bordercolor="#c9c9c9" width="100%" cellspacing ="0" class="table1">
                    <tr>
                       <td>
                            <div>
                                <input type="hidden" name="id" value="<?php echo $data['id'];?>" disabled>
                                <image class="profile" src="<?php echo "../../image/".$data['photo'];?>"/ disabled>
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
                    <form method="POST" action="editprofileuser.php">
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
                            <option value="<?php echo $data['department'];?>" selected><?php echo $data['department'];?></>
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
                            Head of Department
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
                        <td colspan="2" width= "350px" style="padding-bottom: 22px">
                            <input type="hidden" class="form" id="head_of_department" name="head_of_department" value="<?php echo $data['head_of_department'];?>" disabled>
                            <input type="text" class="form" value="<?php echo $data['head_of_department']; ?>" disabled>  
                        </td>
                    </tr>
                    
                    <td colspan="2" width= "350px">
                            Username
                        </td>
                    <tr>
                        <td width= "350px" style="padding-bottom: 20px" colspan="2">
                            <input type="hidden"  id="username" name="username"  value="<?php echo $data['username']; ?>" disabled>
                            <input type="text" class="form" value="<?php echo $data['username']; ?>" disabled >
                        </td>
                    </tr>
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
</body>
</html>
