<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <link rel="stylesheet" href="user_profile2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
            <button type="submit" class="a-open"><a href="user_profile.php">Profile</a></button>               
            <button type="submit" class="a-menu"><a href="../user_rol/user_rol.php">Requests On Leave</a></button>
            <button type="submit" class="a-menu"><a href="../user_report/user_report.php">Report</a></button>
    </div>

<!-- kontent -->
<div class="a-main">
        <d>My Profile</d>
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
                 <button type="submit" class="a-menu"><a href="user_profile.php">Save Change</a></button>
                </div>  
            </form>
        </div>
    </div>

</body>
</html>