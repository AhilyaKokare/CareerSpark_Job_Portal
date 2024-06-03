<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("location: candi_loginfront.php");
}
include('config.php');
$user_check = $_SESSION['login_user'];

$ses_sql= mysql_query("select * from job_portal.signup_candi where sc_email= '$user_check' ");

$row = mysql_fetch_array($ses_sql);

// echo "<center>"."<b>"."WELCOME ".$data = $row['a_name'] ."</b>"."</center>";

?>