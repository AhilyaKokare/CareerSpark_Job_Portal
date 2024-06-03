<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.ico">
  <title>Employee Log in</title>
  <style>
    /* Responsive */
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url("images/login_emp.jpg");
    background-repeat: no-repeat;
    background-size: 100% auto;
    background-position: center;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 35%;
}

.login-container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.login-container input[type="text"],
.login-container input[type="email"],
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.login-container input[type="submit"] {
    width: 100%;
    background-color: #00e673;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.login-container input[type="submit"]:hover {
    background-color: #00b359;
}

.center-button {
    display: flex;
    justify-content: center;
    align-items: center;
}

.center-button button {
    background-color: #00e673;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width: 100%;
    margin-top: 20px;
}

.center-button button:hover {
    background-color: #00b359;
}

.no-underline {
    text-decoration: none;
}

.para {
    padding: 10px;
    text-align: center;
}

.glow-text {
    font-size: 30px;
    animation: glow 1.5s infinite alternate;
}

@keyframes glow {
    0% {
        text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00, 0 0 40px #00ff00;
    }
    50% {
        text-shadow: none;
    }
    100% {
        text-shadow: 0 0 10px #00ff00, 0 0 20px #00ff00, 0 0 30px #00ff00, 0 0 40px #00ff00;
    }
}

/* Media Queries for Responsiveness */

@media only screen and (max-width: 768px) {
    .login-container {
        width: 60%;
    }
}

@media only screen and (max-width: 576px) {
    .login-container {
        width: 80%;
    }
}


  </style>
</head>
<body>

<div class="login-container">
  <h2 class="glow-text">Employee Login</h2>
  <form action="emp_loginback.php" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">


<a href="forgotbtn_emp.php" class="center-button no-underline">
    <button type="button">Forgot Password</button>
</a>

<div class="para">
  <p>Don't have an account? <a href="emp_signupfront.php">Signup</a></p>
</div>

    
  </form>
</div>

</body>

</body>
</html>
