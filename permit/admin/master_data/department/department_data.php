<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="department_data1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Department's Data</title>
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
            $result = $a ->sql;
            $data = mysqli_fetch_assoc($result);                  
        ?>


 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
            <button type="submit" class="a-menu"><a href="../../admin_dashboard/admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../../admin_rol/admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-open"><a href="department_data.php">Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <d>Department's Data</d>
        <div class="search-bar">
            <table align="left" border="0" cellspacing="2" width="100%">
                <tbody>
                    <tr>
                    <form method="POST">
                        <td><input type="text" class="search" name="department" id="department" placeholder="Department" name="Department"><button name="search" class="searchbtn">Search</button></td>
                    </form>
                        <td align="right"><a href ="add_department.php"><button class="adddepartment">Add Department</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>

        <?php   
            if (isset($_POST['search'])) {          
                $search_id = $_POST['department'];  
                if($search_id != ""){
                    $a->select("department","*","id='$search_id'");
                }else{
                    $a->select("department","*");
                }
            
            }else{
                $a->select("department","*");
            }
            //fetch total data
            $department = $a ->sql;
            $count = mysqli_num_rows($department);
        ?>

        <div class="java"> 
            <e>Show (<?php echo $count;?>) total entries</e>
        </div>
        <div class= "tabel">
            <table border="1" bordercolor="#c9c9c9" width="100%" cellspacing ="0">
                <tr bgcolor="#7864F3">
                    <th rowspan="2">No</th>
                    <th rowspan="2">ID</th>
                    <th rowspan="2">Department's Name</th>
                    <th rowspan="2">Total Employee</th>
                    <th colspan="2">Action</th>
                </tr>
                <tr bgcolor="#7864F3">
                    <th width="60px">
                        Edit
                    </th>
                    <th width="60px">
                        Delete
                    </th>
                </tr>

                <?php   
                    //fetch department data
                    $no = 1;
                    while($departmentdata = mysqli_fetch_assoc($department)){
                ?>

                <tr bgcolor="white">
                    <td width="20px">
                        <?php echo $no++; ?>
                    </td>
                    <td width="60px">
                        <?php echo $departmentdata['id']; ?>
                    <td width="120px" align="left" style="padding:10px">
                        <?php echo $departmentdata['department_name']; ?>
                    </td>
                    <td width="100px">
                        <?php echo $departmentdata['total_employee'];?>
                    </td>
                    <td width="30px">
                    <a href="edit_department.php?id=<?php echo $departmentdata['id']?>"><button class="action"><i class="edit"></i></button></a>				
                    </td>
                    <td width="30px">
                    <a href="delete_department.php?id=<?php echo $departmentdata['id']?>"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>

                <?php
                    };
                ?>
            
            </table>
        </div>
    </div>

    

</body>
</html>
