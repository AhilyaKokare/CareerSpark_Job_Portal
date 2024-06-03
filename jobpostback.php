<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $a = $_POST['jobTitle'];
    $b = $_POST['location'];
    $c = $_POST['contact'];
    $d = $_POST['email'];
    $e = $_POST['industry'];
    $f = $_POST['experience'];
    $g = $_POST['employmentType']; 
    $h = $_POST['education'];   
    $i = $_POST['salary']; 
    $j = $_POST['companyName'];   
    $k = $_POST['postedDate'];   



$qry = mysql_query("INSERT INTO job_portal.job (j_title, j_loc, j_cont, j_email, j_industry, j_experience, j_type, j_edu, j_salary, j_cpny_name, j_posted) VALUES ('$a' , '$b' , '$c' , '$d' , '$e' , '$f' , '$g' , '$h' , '$i' , '$j' , '$k' )");

    if($qry == true){

        echo "<script>alert('Job Post Successfully!!!');</script>";
        echo "<script>window.location.href = 'jobpost.php?reset=true';</script>"; // Go back to the previous page with a reset parameter
        exit();
    }
    else{
        echo "Not Inserted".mysql_error();
    }
}
else{
    echo "Request method is not POST";
}
?>

