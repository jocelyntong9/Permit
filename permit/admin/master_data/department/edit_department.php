<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="department_action.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Edit Department</title>
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
            <button type="submit" class="a-menu"><a href="../../admin_report/admin_report/php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-open"><a href="department_data.php">Department's Data</a></button>
    </div>
<!-- kontent -->
    <div class="a-main">
        <div class="top">
             <d>Edit Department</d>
            <a href ="department_data.php"><button class="return">Return</button></a>
        </div>

        <?php
                    include 'model_department.php';
                    $model = new Model();
                    $id = $_REQUEST['id'];
                    $row = $model->edit($id);

                    if (isset($_POST['update'])) {
                        if (isset($_POST['department_name'])) {                        
                            if (!empty($_POST['department_name'])) {     
                                $data['id'] = $id;
                                $data['department_name'] = $_POST['department_name'];
                            $update = $model->update($data);

                        if($update){
                            echo "<script type='text/javascript'>alert('Department name has been edited!');window.location.href='department_data.php';</script>";
                        }
                        else{
                            echo "<script type='text/javascript'>alert('Please try again!');window.location.href='department_data.php';</script>";
                        }

                        }
                        else{
                            echo "<script type='text/javascript'>alert('Empty data!');window.location.href='department_data.php';</script>";
                        }
                    }
                    }

                    ?>

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
                            <input type="hidden" name="id" value="<?php echo $row['id'];?>" >
                            <input type="number" class="form" id="id" name="id" value="<?php echo $row['id']; ?>" disabled>
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
                            <input type="text" class="form" id="department_name" name="department_name" value="<?php echo $row['department_name']; ?>">
                        </td>
                    </tr>
                </table>
                <button type="submit" name="update" class="save">Save</button>  
                </form>
            </fieldset>
        </div>
</body>
</html>