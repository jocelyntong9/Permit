<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
    <link rel="stylesheet" href="login1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <!-- mainbar -->
     <div class="mainbar"> 
        <div class="a-logo"></div>
    </div> 

    <!--Kotak login-->
        <div class="logo-login">
            <legend><img src="image/logo-halaman-login.png" alt="gambar logo" width="140px"></legend>
        </div>
    <div class="kotak-login">
        <div class="form-login">
            <form action="proses_login.php" method="POST">
                    <div class="input-login">
                        <div class="user-logo">
                            <div class="fa fa-user" style="color:white;"></div>
                        </div>
                            <input type="text" name="username" placeholder="Username" required>
                        <div class="pass-logo">
                            <div class="fa fa-lock" style="color:white;"></div>
                        </div>
                            <input type="password" id="pass" name="password" placeholder="Password" required>
                        <span id="eye" class="show-hide">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </span>
                            <button type="submit" name="login">Login</button>
                    </div>
            </form>
        </div>
    </div>
    <script>
            const pass = document.querySelector("#pass");
            const btn_show = document.querySelector ("i");
            btn_show.addEventListener ("click", function (){
                if(pass.type === "password") {
                    pass.type = "text";
                    btn_show.classList.add("hide");
                    document.querySelector("i").style.color="white";
                    document.querySelector("i").innerHTML='<i class="fa fa-eye-slash" aria-hidden="true" style="color:black;margin-right:13px;"></i>';
                } else {
                    pass.type = "password";
                    btn_show.classList.remove("hide");
                    document.querySelector("i").innerHTML='<i class="fa fa-eye" aria-hidden="true" style="color:black;margin-right:13px;"></i>';

                }
            })
    </script>
</body>