<!DOCTYPE html>
<html>
<head>
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
<link rel="icon" href="images/favicon.ico">
<title>Admin Log in</title>

<style>
    /* Responsive */
body {
    background-image: url('images/admin_bg_img.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.form {
    background-color: rgba(0, 0, 0, 0.5);
    width: 30%;
    height: 35vh;
    color: #fff;
    margin: auto;
    margin-top: 10%;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.form h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form input[type="text"],
.form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

.form button {
    width: 100%; /* Change width to 100% to make it span the full width */
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
}

.form button:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .form {
        width: 50%;
        height: auto;
        margin-top: 20%;
        padding: 15px;
    }

    .form h1 {
        font-size: 24px;
    }

    .form input[type="text"],
    .form input[type="password"] {
        padding: 8px;
    }

    .form button {
        padding: 8px;
    }
}

@media (max-width: 480px) {
    .form {
        width: 80%;
        height: auto;
        margin-top: 30%;
        padding: 10px;
    }

    .form h1 {
        font-size: 20px;
    }

    .form input[type="text"],
    .form input[type="password"] {
        padding: 6px;
    }

    .form button {
        padding: 6px;
    }
}
</style>
</head>
<body>
    <div class="form">
        <form id="loginForm" action="admin_front.php" method="POST">
            <h1>Login Form</h1>

            
            <input type="text" name="email" id="email" placeholder="Enter Email or Contact">

            
            <input type="password" name="pass" id="pass" placeholder="Enter your password">

            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>



<?php
session_start();

include("config.php");
if(isset($_SESSION['login_user1']))
{
    header("location:admin_front.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $useremail = $_POST['email'];
    $mypassword = $_POST['pass'];
    $password = md5($mypassword);   //Encrypted Password
    $sql = "SELECT a_id FROM job_portal.admin WHERE (a_email='$useremail' OR a_cont='$useremail') AND a_pass='$password' ";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['login_user1'] = $useremail;
        header("location: admin_front.php");
    }
    else{
        echo "<center>"."Your Login Email or Password is invalid"."<center>";
    }
}
?>
