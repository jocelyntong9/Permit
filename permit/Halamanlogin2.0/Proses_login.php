<?php
/*
     session_start();
     include "panggil.php";

     if(isset($POST["LOGIN"])){
          if($data->proses_login())  
          {  
               if($data->proses_login())  
               {  
                    $_SESSION["username"] = $_POST["user"];  
                    echo "<script>alert('Proses login berhasil! dari function'); window.location = ('halaman_utama.php');</script>"; 
               }  
               else  
               {  
                    $message = $data->error;  
               }  
          }  
          else  
          {  
               $message = $data->error;  
               echo "<script>alert('Proses login gagal! dari function'); window.location = ('login1.php');</script>";
          } 
     }
     $User = $_POST['user'];
     $Pass = $_POST['password'];
     $koneksi = mysqli_connect("localhost", "root", "", "database_login");

     $proses_login = mysqli_query($koneksi,"SELECT * FROM tabel_login_karyawan WHERE userid =
     '".$User."' and password = '".$Pass."' ");

     $hasil_proses = mysqli_fetch_row($proses_login);

     if ($hasil_proses > 0){
         $_SESSION['name'] = $User;
         $_SESSION['status'] = 'login';

         echo "<script>alert('Proses login berhasil!'); window.location = 
         ('halaman_utama.php');</script>";
     } else {
         echo "<script>alert('Proses login gagal!'); window.location = 
         ('login1.php');</script>";
     }
*/

/*
  include 'koneksi_login.php';  
  session_start();  
  $data = new database();  
  $message = '';  
  if(isset($_POST["login"]))  
  {  
       $field = array(  
            'user'     =>     $_POST["user"],  
            'password'     =>     $_POST["password"]  
       );  
       if($data->required_validation($field))  
       {  
            if($data->can_login($table_name, $field))  
            {  
                 $_SESSION["username"] = $_POST["user"];  
                 echo "<script>alert('Proses login berhasil!'); window.location = ('halaman_utama.php');</script>"; 
            }  
            else  
            {  
                 $message = $data->error;  
            }  
       }  
       else  
       {  
            $message = $data->error;  
            echo "<script>alert('Proses login gagal!'); window.location = ('login1.php');</script>";
       }  
  }    
*/



 //ORIGINAL
        session_start();
        include "koneksi_login.php";

        $User = $_POST['user'];
        $Pass = $_POST['password'];

        $proses_login = mysqli_query($konek,"SELECT * FROM tabel_login_karyawan WHERE userid =
        '".$User."' and password = '".$Pass."' ");

        $hasil_proses = mysqli_fetch_row($proses_login);

        if ($hasil_proses > 0){
            $_SESSION['name'] = $User;
            $_SESSION['status'] = 'login';

            echo "<script>alert('Proses login berhasil!'); window.location = 
            ('halaman_utama.php');</script>";
        } else {
            echo "<script>alert('Proses login gagal!'); window.location = 
            ('login1.php');</script>";
        }

//youtube tutorial 
/*include "koneksi_login.php";
include "LoginContr.php";

     class login extends Database {

          protected function validasi_user($User,$Pass) {
               $User = $_POST['user'];
               $Pass = $_POST['password'];
               
               $statement = $this->koneksi()->prepare("SELECT * FROM tabel_login_karyawan WHERE userid =
               '".$User."' and password = '".$Pass."' ");

               if($statement->rowCount()> 0) {
                    $_SESSION['name'] = $User;
                    $_SESSION['status'] = 'login';
        
                    echo "<script>alert('Proses login berhasil!'); window.location = 
                    ('halaman_utama.php');</script>";
               } else {
                    echo "<script>alert('Proses login gagal!'); window.location = 
                    ('login1.php');</script>";
               }
          }
     }*/
?>