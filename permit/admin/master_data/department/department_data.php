<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="department_data.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Department's Data</title>
</head>
<body>
 <!-- mainbar -->
    <div class="mainbar"> 
        <div class="a-logo"></div>
        <button type="submit" class="logout">LOG OUT</button>
    </div> 

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, nama</c>
            <button type="submit" class="a-menu"><a href="../../admin_dashboard/admin_dashboard.php">&ensp;Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../../admin_rol/admin_rol.php">&ensp;On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report.php">&ensp;Report</a></button>
            <button type="submit" class="a-menu"><a href="../employee/employee_data.php">&ensp;Employee's Data</a></button>
            <button type="submit" class="a-open"><a href="department_data.php">&ensp;Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <d>Department's Data</d>
        <div class="search-bar">
            <table align="left" border="0" cellspacing="2" width="100%">
                <tbody>
                    <tr>
                    <form method="POST">
                        <td><input type="text" class="search" id="department" placeholder="Department" name="Department" required><button class="searchbtn">Search</button></td>
                    </form>
                        <td align="right"><a href ="add_department.php"><button class="adddepartment">Add Department</button></a></td>
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
                <tr bgcolor="white">
                    <td width="20px">
                        1
                    </td>
                    <td width="60px">
                        1
                    </td>
                    <td width="120px" align="left">
                       &ensp;Maintenance
                    </td>
                    <td width="100px">
                        1
                    </td>
                    <td width="30px">
                    <a href="edit_department.php"><button class="action"><i class="edit"></i></button></a>				
                    </td>
                    <td width="30px">
                    <a href="#"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>
                <tr bgcolor="white">
                    <td width="20px">
                        2
                    </td>
                    <td width="60px">
                        2
                    </td>
                    <td width="120px" align="left">
                       &ensp;Finance
                    </td>
                    <td width="100px">
                        2
                    </td>
                    <td width="30px">
                    <a href="edit_department.php"><button class="action"><i class="edit"></i></button></a>			
                    </td>
                    <td width="30px">
                    <a href="#"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>
                <tr bgcolor="white">
                    <td width="20px">
                        3
                    </td>
                    <td width="60px">
                        3
                    </td>
                    <td width="120px" align="left">
                       &ensp;Production
                    </td>
                    <td width="100px">
                        1
                    </td>
                    <td width="30px">
                    <a href="edit_department.php"><button class="action"><i class="edit"></i></button></a>		
                    </td>
                    <td width="30px">
                    <a href="#"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>
                <tr bgcolor="white">
                    <td width="20px">
                        4
                    </td>
                    <td width="60px">
                        4
                    </td>
                    <td width="120px" align="left">
                       &ensp;IT
                    </td>
                    <td width="100px">
                        3
                    </td>
                    <td width="30px">
                    <a href="edit_department.php"><button class="action"><i class="edit"></i></button></a>		
                    </td>
                    <td width="30px">
                    <a href="#"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>                 <tr bgcolor="white">
                    <td width="20px">
                        5
                    </td>
                    <td width="60px">
                        5
                    </td>
                    <td width="120px" align="left">
                       &ensp;Customer Service
                    </td>
                    <td width="100px">
                        7
                    </td>
                    <td width="30px">
                    <a href="edit_department.php"><button class="action"><i class="edit"></i></button></a>		
                    </td>
                    <td width="30px">
                    <a href="#"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>
                <tr bgcolor="white">
                    <td width="20px">
                        6
                    </td>
                    <td width="60px">
                        6
                    </td>
                    <td width="120px" align="left">
                       &ensp;Administration
                    </td>
                    <td width="100px">
                        4
                    </td>
                    <td width="30px">
                    <a href="edit_department.php"><button class="action"><i class="edit"></i></button></a>		
                    </td>
                    <td width="30px">
                    <a href="#"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>