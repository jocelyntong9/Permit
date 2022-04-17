<!--Dikerjakan oleh 2031013 Jocelyn*-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_report1.css">
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
           <li><button type="submit" class="logout">LOG OUT</button></li>
        </nav>
    </div> 

<!-- sidebar -->
    <div class="a-sidebar">
            <c>Welcome, nama</c>
            <button type="submit" class="a-menu"><a href="../user_profile/user_profile.php">&ensp;Profile</a></button>               
            <button type="submit" class="a-menu"><a href="../user_rol/user_rol.php">&ensp;Request On Leave</a></button>
            <button type="submit" class="a-open"><a href="../user_report/user_report.php">&ensp;Report</a></button>
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
                <button type="submit" class="Search" name="Search">Search&ensp;&emsp;<i class="search" data-icon="bytesize:search"></i></button>
            
            </form>
        </div>
            
        <br>
    <?php 
        session_start();
        include '../../class/init.php';
        
        $a = new database();
        $a->select("user","*","username='Eric'");
        $result = $a ->sql;

        $data = mysqli_fetch_assoc($result);

    ?>
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
                $a->select("request_on_leave","*","id='1'");
                $result = $a ->sql;
                while($data = mysqli_fetch_assoc($result)){
            
            ?>
                <tr bgcolor="white" height="35px">
                    <td align="center" width="10px"><?php echo $no++; ?></td>
                    <td align="center"><?php echo  $data['form_id']; ?></td>
                    <td align="center"><?php echo $data['on_leave_from'] ; ?></td>
                    <td align="center"><?php echo $data['on_leave_to']; ?></td>   
                    <td align="center"><?php echo $data['period']." Days"; ?></td>
                    <td align="center"><?php echo $data['type_of_leave']; ?></td>                                          
                    <td align="center"><?php echo $data['reason_of_leave'];?></td>   
                    <td align="center"><?php echo $data['approvement_by'];?></td>
                    <td align="center"><?php echo $data['status'];?></td>
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
