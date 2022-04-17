<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="department_action1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Add Department</title>
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
            <button type="submit" class="a-menu"><a href="../../admin_dasbhoard/admin_dashboard.php">&ensp;Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../../admin_rol/admin_rol.php">&ensp;On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report.php">&ensp;Report</a></button>
            <button type="submit" class="a-menu"><a href="../employee/employee_data.php">&ensp;Employee's Data</a></button>
            <button type="submit" class="a-open"><a href="department_data.php">&ensp;Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Add Department</d>
            <a href ="department_data.php"><button class="return">Return</button></a>
        </div>
        <div class="content"> 
            <fieldset>
                <form method="POST">
                <table border="0" bordercolor="#c9c9c9" width="100%" cellspacing ="0" class="table">
                    <tr>
                       <td>
                           ID
                        </td>
                    </tr>
                    <tr>
                       <td>
                            <input type="number" class="form" id="ID" name="ID" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Department
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form" id="department" name="department" required>
                        </td>
                    </tr>
                </table>
                <button type="submit"class="add">Add</button>  
                </form>
            </fieldset>
        </div>
</body>
</html>