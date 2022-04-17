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
        <button type="submit" class="logout">LOG OUT</button>
    </div> 

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, nama</c>
            <button type="submit" class="a-menu"><a href="../../admin_dasboard/admin_dashboard.php">&ensp;Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../../admin_rol/admin_rol.php">&ensp;On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report.php">&ensp;Report</a></button>
            <button type="submit" class="a-open"><a href="employee_data.php">&ensp;Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../department/department_data.php">&ensp;Department's Data</a></button>
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
                <tr bgcolor="white">
                    <td width="20px">
                        1
                    </td>
                    <td width="60px">
                        000001
                    </td>
                    <td width="100px" align="left">
                       &ensp;Eric
                    </td>
                    <td width="60px">
                        Finance
                    </td>
                    <td width="60px">
                        Accounting
                    </td>
                    <td width="60px">
                        Male
                    </td>
                    <td width="90px">
                        02-03-2003
                    </td>
                    <td width="60px">
                        08123450694
                    </td>
                    <td width="60px" align="left">
                        &ensp;eric@gmail.com
                    </td>
                    <td width="30px">
                    <a href="edit_employee.php"><button class="action"><i class="edit"></i></button></a>			
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
                        000002
                    </td>
                    <td width="100px" align="left">
                       &ensp;Jocelyn
                    </td>
                    <td width="60px">
                        Finance
                    </td>
                    <td width="60px">
                        Consultant
                    </td>
                    <td width="60px">
                        Female
                    </td>
                    <td width="90px">
                        17-12-2004
                    </td>
                    <td width="60px">
                        086521191920
                    </td>
                    <td width="60px" align="left">
                        &ensp;jocelyn@gmail.com
                    </td>
                    <td width="30px">
                    <a href="edit_employee.php"><button class="action"><i class="edit"></i></button></a>			
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
                        000003
                    </td>
                    <td width="100px" align="left">
                       &ensp;Andrew Cen
                    </td>
                    <td width="60px">
                        Production
                    </td>
                    <td width="60px">
                        Manager
                    </td>
                    <td width="60px">
                        Male
                    </td>
                    <td width="90px">
                        28-08-2002
                    </td>
                    <td width="60px">
                        08234949552
                    </td>
                    <td width="60px" align="left">
                        &ensp;andrew@gmail.com
                    </td>
                    <td width="30px">
                    <a href="edit_employee.php"><button class="action"><i class="edit"></i></button></a>			
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
                        000004
                    </td>
                    <td width="100px" align="left">
                       &ensp;Valenteeno Bong
                    </td>
                    <td width="60px">
                        Administration
                    </td>
                    <td width="60px">
                        Administrator
                    </td>
                    <td width="60px">
                        Male
                    </td>
                    <td width="90px">
                        31-10-1999
                    </td>
                    <td width="60px">
                        08542029390
                    </td>
                    <td width="60px" align="left">
                        &ensp;valenteeno@gmail.com
                    </td>
                    <td width="30px">
                    <a href="edit_employee.php"><button class="action"><i class="edit"></i></button></a>			
                    </td>
                    <td width="30px">
                    <a href="#"><button class="action"><i class="delete"></i></button></a>	
                    </td>
                </tr>
                <tr bgcolor="white">
                    <td width="20px">
                        5
                    </td>
                    <td width="60px">
                        000005
                    </td>
                    <td width="100px" align="left">
                       &ensp;Felix King Lie
                    </td>
                    <td width="60px">
                        Customer Service
                    </td>
                    <td width="60px">
                        Staff
                    </td>
                    <td width="60px">
                        Male
                    </td>
                    <td width="90px">
                        20-07-2000
                    </td>
                    <td width="60px">
                        087654321108
                    </td>
                    <td width="60px" align="left">
                        &ensp;felix@gmail.com
                    </td>
                    <td width="30px">
                    <a href="edit_employee.php"><button class="action"><i class="edit"></i></button></a>			
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
                        000006
                    </td>
                    <td width="100px" align="left">
                       &ensp;Vincent Wijaya
                    </td>
                    <td width="60px">
                        IT
                    </td>
                    <td width="60px">
                        Staff
                    </td>
                    <td width="60px">
                        Male
                    </td>
                    <td width="90px">
                        15-12-2001
                    </td>
                    <td width="60px">
                        089753212936
                    </td>
                    <td width="60px" align="left">
                        &ensp;vincent@gmail.com
                    </td>
                    <td width="30px">
                    <a href="edit_employee.php"><button class="action"><i class="edit"></i></button></a>			
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