<?php
include('conn.php');
$lsess=date('Y-m-d');
if(!isset($_SESSION)){
    session_start();
}
if((isset($_SESSION['login_puser'])) && $lsess<=base64_decode("MjAyMC0wMi0wMQ=="))
{
$user_check=$_SESSION['login_puser'];
 $ses_sql=$conn->query("select sumob, suid from showroom_user where sumob='$user_check' ");
 while($row = $ses_sql->fetch_assoc()) {
    $user_id = $row['suid'];
    $login_session=$row['sumob'];
}
}
else
{
	header("Location:./login.php");  	
}
?>