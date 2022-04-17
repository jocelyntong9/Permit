<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="employee_data1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Employee's Data</title>
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
        <d>Employee's Data</d>
        <div class="search-bar">
            <table align="left" border="0" cellspacing="2" width="100%">
                <tbody>
                    <tr>
                    <form method="POST">
                        <td><input type="number" class="search" id="ID" placeholder="ID" name="ID" required><button class="searchbtn">Search</button></td>
                    </form>
                        <td align="right"><a href='add_employee.php'><button class="addemployee">Add Employee</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <div class="java"> 
            <e>Show (10) entries</e>
        </div>
        <div class= "tabel">
            <table border="1" bordercolor="#c9c9c9" width="100%" cellspacing ="0">
                <tr bgcolor="#7864F3">
                    <th rowspan="2">No</th>
                    <th rowspan="2">ID</th>
                    <th rowspan="2">Name</th>
                    <th rowspan="2">Department</th>
                    <th rowspan="2">Position</th>
                    <th rowspan="2">Gender</th>
                    <th rowspan="2">Date of Birth</th>
                    <th rowspan="2">Contact</th>
                    <th rowspan="2">Email</th>
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
                    include 'model_employee.php';
                    $model = new Model();
                    $rows = $model->fetch();
                    $no=1;
                    if(!empty($rows)){
                      foreach($rows as $row){ 
                ?>

                <tr bgcolor="white">
                    <td width="20px">
                        <?php echo $no++; ?>
                    </td>
                    <td width="60px">
                        <?php echo $row['id']; ?>
                    </td>
                    <td width="100px" align="left" style="padding:10px">
                        <?php echo $row['name']; ?>
                    </td>
                    <td width="60px">
                        <?php echo $row['department']; ?>
                    </td>
                    <td width="60px">
                        <?php echo $row['position']; ?>
                    </td>
                    <td width="60px">
                    <?php echo $row['gender']; ?>
                    </td>
                    <td width="90px">
                    <?php echo $row['date_of_birth']; ?>
                    </td>
                    <td width="60px">
                    <?php echo $row['contact']; ?>
                    </td>
                    <td width="60px" align="left" style="padding:10px">
                    <?php echo $row['email']; ?>
                    </td>
                    <td width="30px">
                    <a href="edit_employee.php?id=<?php echo $row['id']?>"><button class="action"><i class="edit"></i></button></a>			
                    </td>
                    <td width="30px">
                    <a href="delete_employee.php?id=<?php echo $row['id']?>"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>
                <?php
                }
              }else{
                echo "No Data";
            }
            ?>
            </table>
        </div>
    </div>

</body>
</html>
