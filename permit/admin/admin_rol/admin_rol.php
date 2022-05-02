<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_rol4.css">
    <title>On Leave Requests</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery.PrintArea.js"></script>
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

        $name = $data['name'];
    ?>

<!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
            <button type="submit" class="a-menu"><a href="../admin_dashboard/admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-open"><a href="admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department/department_data.php">Department's Data</a></button>
    </div>

<!-- kontent-->
    <div class="a-main">
        <div class="top">
             <d>On Leave Requests</d>
        </div>

    <!-- content -->

        <div class="content"> 
                <label class="subtitle">6 Requests</label>
                <a href="admin_rol_addrequest.php"><button type="button" class="AddRequest" name="Add Request"><a href="admin_rol_addrequest.php">Add Request</a></i>
</button>
        </div>
            
        <br>

        <div class="showentries">
            <label class="show">Show</label>
            <select class="dropdown">
                <option disabled selected>All</option>
                <option value=>1</option> 
                <option value=>10</option> 
                <option value=>50</option> 
            </select>
            <label class="entries">entries</label>
        </div>

    

        <div class="tabel">
            <table border="1" font color="0" bordercolor="1" width="90%" cellspacing ="0">
                <tr>
                    <td style="color:white" align="center" width="5px" height="30px" bgcolor="#7864F3">No</td>
                    <td style="color:white" align="center"width="20px" height="30px" bgcolor="#7864F3">Form ID</td>
                    <td style="color:white" align="center"width="10px" height="30px" bgcolor="#7864F3">Name</td>
                    <td style="color:white" align="center" width="80px" height="30px" bgcolor="#7864F3">On Leave From</td>
                    <td style="color:white" align="center" width="80px" height="30px" bgcolor="#7864F3">On Leave To</td>
                    <td style="color:white" align="center" width="30px" height="30px" bgcolor="#7864F3">Period</td>
                    <td style="color:white" align="center" width="70px" height="30px" bgcolor="#7864F3">Type of Leave</td>                   
                    <td style="color:white" align="center" width="3px" height="30px" bgcolor="#7864F3">Approvement By</td>
                    <td style="color:white" align="center" width="50px" height="30px" bgcolor="#7864F3">Status</td>
                    <td style="color:white" align="center" width="50px" height="30px" bgcolor="#7864F3">Action</td>
                </tr>
            <?php   
                
                $a->select("request_on_leave","*","approvement_by='$name'");
                $result = $a ->sql;
                $no = 1;
                while($data = mysqli_fetch_assoc($result)){
            ?>
            <form method="POST" action ="admin_rol_editrequest1.php"> 
                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px"><?php echo $no++; ?></td>
                    <td align="center"><?php echo  $data['form_id']; ?></td>
                    <td align="center"><?php echo  $data['name']; ?></td>
                    <td align="center"><?php echo  $data['on_leave_from']; ?></td>
                    <td align="center"><?php echo  $data['on_leave_to']; ?></td>   
                    <td align="center"><?php echo  $data['period']; ?></td>
                    <td align="center"><?php echo  $data['type_of_leave']; ?></td>                                            
                    <td align="center"><?php echo  $data['approvement_by']; ?></td>
                    <td align="center"><?php echo  $data['status']; ?></td>
                    <input type="hidden" name="formid" value=<?php echo $data['form_id'];?>>  
                    <td align="center"><button class ='submit'><img src="../../image/editbutton.png" alt="edit"  height=30 width=30></button></td>
                </tr>
            </form>

            <?php 
                }
            ?>
            
            
            

            </table>

        
            
        </div>
    </div>
        </div>


</body>
</html>
