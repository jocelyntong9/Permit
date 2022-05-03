<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_report3.css">
    <title>User Report</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery.PrintArea.js"></script>
</head>
<body>
<script>
$(document).ready(function(){
    $(".cetak").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.print").printArea( options );
    });
});
</script>

  
 <!-- mainbar -->
    <!-- mainbar -->
    <div class="mainbar"> 
        <div class="a-logo"></div>
        <nav>
           <li><a href=../../logout.php><button type="submit" class="logout">LOG OUT</button></a></li>
        </nav>
    </div> 

    <?php 
        session_start();
        $id_user = $_SESSION[ 'id_user' ];
        include '../../class/init.php';
        
        $a = new CRUD();
        $a->select("user","*","id='$id_user'");
        $result = $a ->sql;

        $data = mysqli_fetch_assoc($result);

    ?>

<!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, <?php echo $data['name'];?></c>
            <button type="submit" class="a-menu"><a href="../user_profile/user_profile.php">Profile</a></button>               
            <button type="submit" class="a-menu"><a href="../user_rol/user_rol.php">Request On Leave</a></button>
            <button type="submit" class="a-open"><a href="../user_report/user_report.php">Report</a></button>
    </div>

<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Report</d>
        </div>

    <!-- kontent -->

        <div class="tanggal">
            <form method="post"> 
                
                <label class="date1">Date</label>
                <label class="date2">:</label>
                <input type="date" class="tanggal-awal" placeholder="Tanggal Awal" name="tanggal-awal" min="1900-01-01" max="2030-12-31"></input>
                <label class="date3">-</label>
                <input type="date" class="tanggal-akhir" placeholder="Tanggal Akhir" name="tanggal-akhir" min="1900-01-01" max="2030-12-31"></input>
                <button type="submit" class="Search" name="filter">Search&ensp;&emsp;<i class="search" data-icon="bytesize:search"></i></button>
            
            </form>
        </div>
            
        <br>
    
    <div class="print">
        <div class="biodata">
            <table border="0" cellspacing="25" width="90%">
                <tbody>
                    <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td width= "20%"><?php echo $data['id'];?></td>
                        <td>Position</td>
                        <td>:</td>
                        <td><?php echo $data['position'];?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td width= "20%"><?php echo $data['name'];?></td>
                        <td>Department</td>
                        <td>:</td>
                        <td width= "45%"><?php echo $data["department"];?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php
            $totaldata= "All";
            if (isset($_POST['totaldata'])) {
                $totaldata = $_POST['totaldata'];           
                if($totaldata == "All"){
                    $a->select("request_on_leave","*","id='$id_user'");
                    $result = $a->sql;
                }else{
                    $a->select_limit("request_on_leave","*","id='$id_user'","$totaldata");
                    $result = $a->sql;
                }
            
            }

            elseif (isset($_POST['filter'])) {
                    
                $date1 = date("Y-m-d", strtotime($_POST['tanggal-awal']));
                $date2 = date("Y-m-d", strtotime($_POST['tanggal-akhir']));

                $b = new filter_date();
                $b->filter("request_on_leave","*",$date1,$date2,"$id_user");
                $result = $b ->sql;
            
            }else{
                $a->select("request_on_leave","*","id='$id_user'");
                $result = $a ->sql;
            }
        ?>

        <form method="POST" id="form_id" name="form_id">
        <div class="showentries">
            <label class="show">Show</label>
            <select class="dropdown" onChange="document.getElementById('form_id').submit();" name="totaldata"> 
                <option disabled selected ><?php echo $totaldata;?></option>
                <option value="All">All</option>
                <option value="1">1</option> 
                <option value="10">10</option> 
                <option value="50">50</option> 
            </select>
            <label class="entries">entries</label>
        </div>
        </form>


        <div class="tabel">
            <table border="1" font color="0" bordercolor="1" width="90%" cellspacing ="0">
                <tr>
                    <td style="color:white" align="center" width="5px" height="30px" bgcolor="#7864F3">No</td>
                    <td style="color:white" align="center"width="10px" height="30px" bgcolor="#7864F3">Form ID</td>
                    <td style="color:white" align="center" width="80px" height="30px" bgcolor="#7864F3">On Leave From</td>
                    <td style="color:white" align="center" width="80px" height="30px" bgcolor="#7864F3">On Leave To</td>
                    <td style="color:white" align="center" width="30px" height="30px" bgcolor="#7864F3">Period</td>
                    <td style="color:white" align="center" width="70px" height="30px" bgcolor="#7864F3">Type of Leave</td>                   
                    <td style="color:white" align="center" width="95px" height="30px" bgcolor="#7864F3">Reason of Leave</td>
                    <td style="color:white" align="center" width="5px" height="30px" bgcolor="#7864F3">Approvement By</td>
                    <td style="color:white" align="center" width="50px" height="30px" bgcolor="#7864F3">Status</td>
                </tr>

            <?php 
                
                $no = 1;
                while($formdata = mysqli_fetch_assoc($result)){
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
                
                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px"><?php echo $no++; ?></td>
                    <td align="center"><?php echo  $formdata['form_id']; ?></td>
                    <td align="center"><?php echo $formdata['on_leave_from'] ; ?></td>
                    <td align="center"><?php echo $formdata['on_leave_to']; ?></td>   
                    <td align="center"><?php echo $formdata ['period'].' '.$period; ?></td>
                    <td align="center"><?php echo $formdata['type_of_leave']; ?></td>                                          
                    <td align="center"><?php echo $formdata['reason_of_leave'];?></td>   
                    <td align="center"><?php echo $formdata['approvement_by'];?></td>
                    <td align="center" style=<?php echo "color:".$color;?>><?php echo $formdata['status'];?></td>
                    
                </tr>

            <?php 
                }
            ?>
        
            
            </table>
        </div>

        <div class="printtable">
            <table border=0 cellspacing="5" width="90%">
            <tr>
                <td align="right"><a href="javascript:void(0);"><button type="button" class="cetak">Print</button></a></td>
            </tr>
            </table>
        </div>
    </div>
        </div>


</body>
</html>
