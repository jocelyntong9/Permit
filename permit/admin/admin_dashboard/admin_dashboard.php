<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="admin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .chartBox {
            width : 700px;
            padding : 12px;
            text-align : center; 
            float : left;
        }
        .pieBox {
            width: 400px;
            padding : 12px;
            text-align : center;
            float : right;
        }
    </style>

    <title>Permit</title>
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
            <button type="submit" class="a-open"><a href="admin_dashboard.php">Dashboard</a></button>               
            <button type="submit" class="a-menu"><a href="../admin_rol/admin_rol.php">On Leave Requests</a></button>
            <button type="submit" class="a-menu"><a href="../admin_report/admin_report.php">Report</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/employee/employee_data.php">Employee's Data</a></button>
            <button type="submit" class="a-menu"><a href="../master_data/department/department_data.php">Department's Data</a></button>
    </div>

<!-- kontent -->
<div class="a-main">
        <d>Admin Profile</d>
    <div class="container-utama">
        <div class="profilepic">
            <img src="../../image/profilepic.jpeg" width="200px" alt="">
            <center><h5>Profile picture</h5></center>
            <center><button type="submit">Upload photo</button><br></center>
            <center><button type="submit">Remove photo</button></center>
        </div>

        <div class="container">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text">
                    </div>
                    <div class="input-box">
                        <span class="details">ID</span>
                        <input type="text">
                    </div>
                    <div class="input-box">
                        <span class="details">Department</span>
                        <input type="text">
                    </div>
                    <div class="input-box">
                        <span class="details">Position</span>
                        <input type="text">
                    </div>
                    <div class="input-box">
                        <span class="details">Contact</span>
                        <input type="text">
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="text">
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text">
                    </div>
                    <div class="input-box">
                        <span class="details">Gender</span>
                        <input type="text">   
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit">Save changes </button>
                </div>  
            </form>
        </div>
    </div>

    <div class="chartBox">
        <e>On Leave per Month</e>
    <canvas id="myChart"></canvas>
    </div>

    <div class="pieBox">
        <f>Employee per Derpartment</f>
    <canvas id="pieChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

    // setup
    const data = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Karyawan',
                data: [4, 5, 3, 5, 2, 3, 2, 2, 2, 3, 4, 5],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
    };

    // config
    const config = {
        type: 'bar',
        data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // render init block
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    // pie chart
    // data of pie chart
    const datapie = {
            labels: ['Finance', 'Maintenance', 'Administration', 'IT', 'Production'],
            datasets: [{
                label: 'Karyawan',
                data: [4, 5, 3, 5, 2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 2
            }]
    };

    // config pie
    const configpie = {
        type: 'pie',
        data : datapie,
        options: {}
    };

    // render or init of pie chart
    const pieChart = new Chart(
        document.getElementById('pieChart'),
        configpie
    );


    </script>

</body>
</html>
