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
        <button type="submit" class="logout">LOG OUT</button>
    </div> 

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, nama</c>
            <button type="submit" class="a-menu"><a href="../../admin_dashboard/admin_dashboard.php">&ensp;Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../../admin_rol/admin_rol.php">&ensp;On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report.php">&ensp;Report</a></button>
            <button type="submit" class="a-open"><a href="employee_data.php">&ensp;Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../department/department_data.php">&ensp;Department's Data</a></button>
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
                            <input type="text" class="form" id="name" name="name" required>
                        </td>
                        <td width= "350px">
                            <input type="number" class="form" id="ID" name="ID" required>
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
                            <input type="text" class="form1" id="department" name="department" required>
                        </td>
                        <td width="130px">
                            <input type="text" class="form1" id="position" name="position" required>
                        </td>
                        <td width= "350px">
                            <input type="number" class="form" id="contact" name="contact" required>
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
                            <input type="date" class="form" id="dbo" name="dbo" required>
                        </td>
                        <td width= "350px">
                            <input type="email" class="form" id="email" name="email" required>
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
                            <input type="text" class="form" id="gender" name="gender" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="submit"class="add">Add</button>  
                        </td>
                    </tr>
                </table>
                </form>
                </div>
            </fieldset>
        </div>
</body>
</html>