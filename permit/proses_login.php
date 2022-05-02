<?php
//start session
session_start();
 
include 'class/init.php';
 
$login = new login();
 
if(isset( $_POST[ 'login' ] )){
	$username = $login->escape_string($_POST[ 'username' ] );
	$password = $login->escape_string($_POST[ 'password' ] );
 
	$auth_user = $login->check_user( $username , $password );
 
	if( $auth_user == true ){
        $_SESSION[ 'id_user' ] = $auth_user;
        echo "<script type='text/javascript'>alert('Welcome to User Dashboard!!!');window.location.href='user/user_profile/user_profile.php';</script>";
        
	}

	elseif($auth_user ==false){

        $auth_admin = $login->check_admin( $username , $password );

        if( $auth_admin == true){
            $_SESSION[ 'id_admin' ] = $auth_admin;
            echo "<script type='text/javascript'>alert('Welcome to Admin Dashboard!!!');window.location.href='admin/admin_dashboard/admin_dashboard.php';</script>";
            
        }elseif ( $auth_admin==false ){      
            echo "<script type='text/javascript'>alert('Username or Password Is Invalid!!!');window.location.href='login.php';</script>";
        }    
	}

}else{
	echo "<script type='text/javascript'>alert(Please Login First!!!');window.location.href='login.php';</script>";
}

?>