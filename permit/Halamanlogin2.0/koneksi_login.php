<?php
/*
    class database {
        public $koneksi;  
        public $error;
        public function __construct()  
        {  
            $this->koneksi = mysqli_connect("localhost", "root", "", "database_login");  
            if(!$this->koneksi)  
            {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->koneksi);  
            }  
        }  

        public function required_validation($field)  
        {  
            $count = 0;  
            foreach($field as $key => $value)  
            {  
                if(empty($value))  
                {  
                    $count++;  
                    $this->error .= "<p>" . $key . " is required</p>";  
                }  
            }  
            if($count == 0)  
            {  
                return true;  
            }  
        }
        public function can_login($table_name, $where_condition){
            $table_name = 'Tabel_login_karyawan';
            $condition = '';  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           $query = 'SELECT * FROM ".$table_name." WHERE ' . $condition;  
           $result = mysqli_query($this->koneksi, $query);  
           if($result > 0)  
           {  
                return true;  
           }  
           else  
           {  
                $this->error = "Wrong Data";  
           }  
        }
    }
*/

 //TES 1 OOP
 /*
    Class koneksi { 
        public function Database_koneksi() {
            $host = "localhost" ;
            $user = "root" ;
            $pw = "" ;
            $database = "database_login" ;


            //$konek = mysqli_connect($host , $user , $pw , $database);

            try {
                $db_koneksi = new PDO("mysql:host=$host;dbname=$database", $user, $pw);
				$db_koneksi->exec("set names utf8");
                $db_koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return  $db_koneksi;
            }

            catch (PDOexception $e){
                return 'connection failed : '. $e->getMessage();
            }    
    }
        public function proses_login(){
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
        }
        */
 //ORIGINAL

    
    $host = "localhost" ;
    $user = "root" ;
    $pw = "" ;
    $database = "database_login" ;
    
    $konek = mysqli_connect($host , $user , $pw , $database);

//youtuber tutorial
    /*class Database {

        protected function koneksi() {
            try {
                $user = "root" ;
                $pw = "" ;
                $Db = new PDO('MySqli:host=localhost;$database=database_login', $user , $pw);
                return $Db;

            } catch (PDOException $e){
                echo "Error ! :" . $e->getMessage() . "<br/>";
                die();
            }
        }
    }*/
?>