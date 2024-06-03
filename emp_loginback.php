<?php
session_start();

include("config.php");
if(isset($_SESSION['login_user']))
{
    header("location:emp_home.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $myuseremail = $_POST['email'];
    $mypassword = $_POST['password'];
    $password = md5($mypassword);   //Encrypted Password
    $sql = "SELECT su_id FROM signup_user WHERE su_email='$myuseremail' AND su_pass='$password' ";

    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);

    $count = mysql_num_rows($result);

    if($count == 1){
        $_SESSION['login_user'] = $myuseremail;
        header("location:emp_home.php");
    }
    else{
        echo "<center>"."Your Login Email or Password is invalid"."<center>";
    }
}
?>