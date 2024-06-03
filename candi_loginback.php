<?php
session_start();

include("config.php");
if(isset($_SESSION['login_user']))
{
    header("location:candi_home.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $myuseremail = $_POST['email'];
    $mypassword = $_POST['password'];
    $password = md5($mypassword);   //Encrypted Password
    $sql = "SELECT sc_id FROM signup_candi WHERE sc_email='$myuseremail' AND sc_pass='$password' ";

    $result = mysql_query($sql);
    $row = mysql_fetch_array($result);

    $count = mysql_num_rows($result);

    if($count == 1){
        $_SESSION['login_user'] = $myuseremail;
        header("location:candi_home.php");
    }
    else{
        // echo "<center>"."Your Login Email or Password is invalid"."<center>";
        echo "<script>alert('Your Login Email or Password is invalid');</script>";
        echo "<script>window.location.href = 'candi_loginfront.php?reset=true';</script>"; // Go back to the previous page with a reset parameter
        exit();
    }
}
?>