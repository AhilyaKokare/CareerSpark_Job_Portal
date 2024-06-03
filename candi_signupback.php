<?php

include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['contact'];
    $d = md5($_POST['password']);
 
$qry = mysql_query("INSERT INTO job_portal.signup_candi (sc_name, sc_email, sc_cont, sc_pass) VALUES ('$a' , '$b' , '$c' , '$d')");

    if($qry == true){
        // echo "<center>"."Data Inserted"."</center>";
        header("location:candi_home.php");
    }
    else{
        echo "Not Inserted".mysql_error();
    }
}
else{
    echo "Request method is not POST";
}
?>