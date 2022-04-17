<!--Dikerjakan oleh 2131127 Vincent Wijaya*-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_rol5.css">
    <title>On Leave Requests</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery.PrintArea.js"></script>
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
            <button type="submit" class="a-menu"><a href="../admin_dashboard/admin_dashboard.php">&ensp;Dashboard</a></button>               
            <button type="submit" class="a-open"><a href="admin_rol.php">&ensp;On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../admin_report/admin_report.php">&ensp;Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">&ensp;Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department_data.php">&ensp;Department's Data</a></button>
    </div>

<!-- kontent-->
    <div class="a-main">
        <div class="top">
             <d>On Leave Requests</d>
        </div>

    <!-- content -->

        <div class="content"> 
                <label class="subtitle">6 Requests</label>
                <button type="button" class="AddRequest" name="Add Request"><a href="admin_rol_addrequest.php">Add Request<i class="AddRequest"></i></a>
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
                    <td style="color:white" align="center"width="10px" height="30px" bgcolor="#7864F3">Name</td>
                    <td style="color:white" align="center" width="80px" height="30px" bgcolor="#7864F3">On Leave From</td>
                    <td style="color:white" align="center" width="80px" height="30px" bgcolor="#7864F3">On Leave To</td>
                    <td style="color:white" align="center" width="30px" height="30px" bgcolor="#7864F3">Period</td>
                    <td style="color:white" align="center" width="70px" height="30px" bgcolor="#7864F3">Type of Leave</td>                   
                    <td style="color:white" align="center" width="3px" height="30px" bgcolor="#7864F3">Approvement By</td>
                    <td style="color:white" align="center" width="50px" height="30px" bgcolor="#7864F3">Status</td>
                    <td style="color:white" align="center" width="50px" height="30px" bgcolor="#7864F3">Action</td>
                </tr>
                
                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px">1</td>
                    <td align="center">Felix</td>
                    <td align="center">2022 - 01 - 04</td>
                    <td align="center">2022 - 01 - 08</td>   
                    <td align="center">5 Days</td>
                    <td align="center">Annual Leave</td>                                            
                    <td align="center">Johan</td>
                    <td align="center" style="color:green;">Approved</td>
                    <td align="center"><a href="admin_rol_editrequest.php"><img src="../../image/editbutton.png" alt="edit"  height=30 width=30></a></td>
                </tr>
            

                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px">2</td>
                    <td align="center">Valenteeno</td>
                    <td align="center">2022 - 01 - 11</td>
                    <td align="center">2022 - 01 - 12</td>
                    <td align="center">2 Days</td>   
                    <td align="center">Sick Leave</td>                                         
                    <td align="center">Alex</td>   
                    <td align="center" style="color:green;">Approved</td>
                    <td align="center"><a href="admin_rol_editrequest.php"><img src="../../image/editbutton.png" alt="edit"  height=30 width=30></a></td>
                </tr>   


                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px">3</td>
                    <td align="center">Jocelyn</td>
                    <td align="center">2022 - 01 - 21</td>
                    <td align="center">2022 - 01 - 23</td>
                    <td align="center">3 Days</td>   
                    <td align="center">Unpaid Absence</td>                                         
                    <td align="center">Yanto</td>   
                    <td align="center" style="color:green;">Approved</td>
                    <td align="center"><a href="admin_rol_editrequest.php"><img src="../../image/editbutton.png" alt="edit"  height=30 width=30></a></td>
                </tr>  

                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px">4</td>
                    <td align="center">Vincent</td>
                    <td align="center">2022 - 02 - 01</td>
                    <td align="center">2022 - 01 - 04</td>
                    <td align="center">4 Days</td>   
                    <td align="center">Annual Leave</td>                                         
                    <td align="center">Susi</td>   
                    <td align="center" style="color:red;">Rejected</td>
                    <td align="center"><a href="admin_rol_editrequest.php"><img src="../../image/editbutton.png" alt="edit"  height=30 width=30></a></td>
                </tr>

                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px">5</td>
                    <td align="center">Eric</td>
                    <td align="center">2022 - 02 - 14</td>
                    <td align="center">2022 - 01 - 14</td>
                    <td align="center">1 Days</td>   
                    <td align="center">Sick Leave</td>                                         
                    <td align="center">Johan</td>   
                    <td align="center" style="color:green;">Approved</td>
                    <td align="center"><a href="admin_rol_editrequest.php"><img src="../../image/editbutton.png" alt="edit"  height=30 width=30></a></td>
                </tr>

                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px">6</td>
                    <td align="center">Andrew</td>
                    <td align="center">2022 - 03 - 08</td>
                    <td align="center">2022 - 03 - 11</td>
                    <td align="center">4 Days</td>   
                    <td align="center">Annual Leave</td>                                         
                    <td align="center">Budi</td>   
                    <td align="center" style="color:yellow;">Pending</td>
                    <td align="center"><a href="admin_rol_editrequest.php"><img src="../../image/editbutton.png" alt="edit"  height=30 width=30></a></td>
                </tr>
            </table>
            
        </div>
    </div>
        </div>


</body>
</html>
