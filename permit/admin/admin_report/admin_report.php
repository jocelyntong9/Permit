<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="admin_report4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Report</title>
</head>
<body>
<?php 
    
    session_start();
    $id_admin = $_SESSION[ 'id_admin' ];
    include '../../class/init.php';
    
    $a = new CRUD();
    $a->select("admin","*","id='$id_admin'");
    $result = $a ->sql;
    $data = mysqli_fetch_assoc($result);
     
?>
    <!-- mainbar -->
    <div class="mainbar"> 
        <div class="a-logo"></div>
        <nav>
            <li><a href=../../logout.php><button type="submit" class="logout">LOG OUT</button></a></li>
        </nav>
    </div> 

 <!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
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
                            <input type="number" class="search" id="folter_id" name="filter_id">
                        </td>
                    </td>
                    <td>
                        <td>
                           
                            <input type="number" class="search" id="filter_formid" name="filter_formid">
                            <label for="Form ID">Form ID</label>
                        </td>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <td>
                            <label for="Status">Status</label>
                            <select name="form_status" class="search" id="form_status">
                                    <option value=""> Choose One </option>
                                    <option value="Approved">Approved</option>
                                    <option value="Reject">Reject</option>
                                    <option value="Pending">Pending</option>
                            </select>
                        </td>
                    </td>
                    <td>
                        <td>
                            <button class="searchbtn" name="filter">Search</button></td>
                        </td>
                        </form>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="showentries">
            <div class="show">Show entries</label>
            <select class="dropdown">
                <option disabled selected>All</option>
                <option value=>1</option> 
                <option value=>10</option> 
                <option value=>50</option> 
            </select>
        </div>
        <br>
        <br>
        <br>
        <div class= "tabel">
            <table border="1" bordercolor="#c9c9c9" width="100%" cellspacing ="0">
            <tr bgcolor="#7864F3">
                    <th width= 30px height=40px>No</th>
                    <th width= 60px>ID</th>
                    <th width= 130px>Name</th>
                    <th width= 100px>Department</th>
                    <th width= 100px>Position</th>
                    <th width= 130px>Form ID</th>
                    <th width= 130px>On Leave From</th>
                    <th width= 130px>On Leave To</th>
                    <th width= 70px>Period</th>
                    <th width= 150px>Type Of Leave</th>
                    <th width= 150px>Reason Of Leave</th>
                    <th width= 130px>Status</th>
                </tr>
                <?php
                    if (isset($_POST['filter'])) {
                        $form_status = $_POST['form_status'];
                        $filter_id = $_POST['filter_id'];
                        $filter_formid = $_POST['filter_formid'];
                        $c = new filter_report();

                        if ($form_status != "" AND $filter_id != "" AND $filter_formid != ""){
                            $c ->filter("status ='$form_status' AND id='$filter_id' AND form_id='$filter_formid'");
                        }
                        elseif ($form_status != "" AND $filter_id != ""){
                            $c ->filter("status='$form_status' AND id='$filter_id'");
                        }
                        elseif ($form_status != "" AND $filter_formid != ""){
                            $c -> filter("status='$form_status' AND form_id='$filter_formid'");
                        }
                        elseif ($filter_id != "" AND $filter_formid != ""){
                            $c ->filter ("id='$filter_formid' AND form_id ='$filter_formid'" );
                        }
                        elseif ($form_status != ""){
                            $c -> filter ("status = '$form_status'");
                        }
                        elseif ($filter_id != ""){
                            $c -> filter("id='$filter_id'");
                        }
                        elseif ($filter_formid != ""){
                            $c -> filter("form_id='$filter_formid'");
                        }
                        else{
                            $c = new CRUD();
                            $c -> select("request_on_leave","*");
                        }
                        
                        $form = $c -> sql;
                    }else{
                        $b = new CRUD();
                        $b -> select("request_on_leave","*");
                        $form = $b -> sql;
                    }

                        
                        $no=1;
                        while($formdata = mysqli_fetch_array($form)){
                            $period = $formdata['period'];
                            if ($period>1){
                                $period = "Days";
                            }elseif($period=1){
                                $period = "Day";
                            }   

                            $status = $formdata['status'];
                            if ($status=="Approved"){
                                $color = "green";
                            }
                            elseif ($status=="Reject"){
                                $color ="red";
                            }
                            elseif ($status=="Pending"){
                                $color ="orange";
                            }
                    ?> 
                <tr bgcolor="white">
                    <td height=40px><?php echo $no++; ?></td>
                    <td><?php echo $formdata ['id']; ?></td>
                    <td>&ensp;<?php echo $formdata ['name']; ?></td>
                    <td><?php echo $formdata ['department']; ?></td>
                    <td><?php echo $formdata ['position']; ?></td>
                    <td><?php echo $formdata ['form_id']; ?></td>
                    <td><?php echo $formdata ['on_leave_from']; ?></td>
                    <td><?php echo $formdata ['on_leave_to']; ?></td>
                    <td><?php echo $formdata ['period'].' '.$period; ?></td>
                    <td><?php echo $formdata ['type_of_leave'];?></td>
                    <td><?php echo $formdata ['reason_of_leave'];?></td>
                    <td style=<?php echo "color:".$color;?>><?php echo $formdata ['status']; ?></td>
                </tr>
                <?php 
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
