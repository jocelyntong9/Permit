<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="admin_report1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Report</title>
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
            <button type="submit" class="a-menu"><a href="../admin_dashboard/admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../admin_rol/admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-open"><a href="admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department/department_data.php">Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <d>Report</d>
        <div class="search-bar">
            <table align="left" border="0" cellspacing="2" width="100%">
                <tbody>
                    <tr>
                    <td>
                        <form method="POST">
                        <td>
                            <label for="ID">ID</label>
                            <input type="number" class="search" id="ID" name="ID" required>
                        </td>
                        </form>
                    </td>
                    <td>
                        <form method="POST">
                        <td>
                            <input type="number" class="search" id="formID" name="ID" required>
                            <label for="Form ID">Form ID</label>
                        </td>
                        </form>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <form method="POST">
                        <td>
                            <label for="Status">Status</label>
                            <input type="text" class="search" id="ID" name="Status" required>
                        </td>
                        </form>
                    </td>
                    <td>
                        <form method="POST">
                        <td>
                            <button class="searchbtn">Search</button></td>
                        </td>
                        </form>
                    </td>
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
                    <th width= 30px height=40px>No</th>
                    <th width= 60px>ID</th>
                    <th width= 150px>Name</th>
                    <th width= 130px>Form ID</th>
                    <th width= 130px>On Leave Form</th>
                    <th width= 130px>On Leave To</th>
                    <th width= 70px>Period</th>
                    <th width= 150px>Type Of Leave</th>
                    <th width= 150px>Reason Of Leave</th>
                    <th width= 150px>Status</th>
                </tr>
                <tr bgcolor="white">
                    <td height=40px>1</td>
                    <td>000001</td>
                    <td>&ensp;Eric</td>
                    <td>220103001</td>
                    <td>2022-01-04</td>
                    <td>2022-01-08</td>
                    <td>5 Days</td>
                    <td>Annual Leave</td>
                    <td>Personal Matter</td>
                    <td style="color: #0B9C2B;">Approved</td>
                </tr>
                <tr bgcolor="white">
                    <td height=40px>2</td>
                    <td>000002</td>
                    <td>&ensp;Jocelyn</td>
                    <td>22011003</td>
                    <td>2022-01-11</td>
                    <td>2022-01-12</td>
                    <td>2 Days</td>
                    <td>Sick Leave</td>
                    <td>Sick</td>
                    <td style="color: #0B9C2B;">Approved</td>
                </tr>
                <tr bgcolor="white">
                    <td height=40px>3</td>
                    <td>000003</td>
                    <td>&ensp;Andrew Cen</td>
                    <td>220120003</td>
                    <td>2022-01-21</td>
                    <td>2022-01-23</td>
                    <td>3 Days</td>
                    <td>Unpaid Absence</td>
                    <td>Personal Matter</td>
                    <td style="color: #0B9C2B;">Approved</td>
                </tr>
                <tr bgcolor="white">
                    <td height=40px>4</td>
                    <td>000004</td>
                    <td>&ensp;Valenteeno Bong</td>
                    <td>220204005</td>
                    <td>2022-02-14</td>
                    <td>2022-02-14</td>
                    <td>1 Days</td>
                    <td>Sick Leave</td>
                    <td>Sick</td>
                    <td style="color: #0B9C2B;">Approved</td>
                </tr>
                <tr bgcolor="white">
                    <td height=40px>5</td>
                    <td>000005</td>
                    <td>&ensp;Felix King Lie</td>
                    <td>220103002</td>
                    <td>2022-01-04</td>
                    <td>2022-01-08</td>
                    <td>5 Days</td>
                    <td>Annual Leave</td>
                    <td>Personal Matter</td>
                    <td style="color: #FF0404;">Rejected</td>
                </tr>
                <tr bgcolor="white">
                    <td height=40px>6</td>
                    <td>000006</td>
                    <td>&ensp;Vincent Wijaya</td>
                    <td>220111004</td>
                    <td>2022-01-11</td>
                    <td>2022-01-12</td>
                    <td>2 Days</td>
                    <td>Sick Leave</td>
                    <td>Sick</td>
                    <td style="color: #FF0404;">Rejected</td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
