

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.ico">
  <title>Candidate Login</title>
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
    background-image: url("images/login.jpg");
    background-repeat: no-repeat;
    background-size: cover; /* Set background size to cover entire width while maintaining aspect ratio */
    background-position: center; /* Optional: Center the background image */
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px; /* Maximum width for the container */
    width: 90%; /* Set width to a percentage */
    margin: auto; /* Center the container */
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
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-bottom: 15px;
}

.login-container input[type="submit"]:hover {
    background-color: #0056b3;
}

.center-button {
    text-align: center;
}

.center-button button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    width: 100%;
    margin-bottom: 15px;
}

.center-button button:hover {
    background-color: #0056b3;
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
    text-shadow: 0 0 10px #007bff, 0 0 20px #007bff, 0 0 30px #007bff;
    animation: glow 1.5s infinite alternate;
}

@keyframes glow {
    0% {
        text-shadow: 0 0 10px #007bff, 0 0 20px #007bff, 0 0 30px #007bff;
    }
    50% {
        text-shadow: none;
    }
    100% {
        text-shadow: 0 0 20px #007bff, 0 0 30px #007bff, 0 0 40px #007bff;
    }
}

/* Responsive Styles */

@media screen and (max-width: 768px) {
    .login-container {
        padding: 10px;
    }

    .login-container h2 {
        font-size: 20px;
    }
}

@media screen and (max-width: 576px) {
    .login-container {
        max-width: 300px;
    }

    .login-container h2 {
        font-size: 18px;
    }

    .login-container input[type="submit"],
    .center-button button {
        font-size: 14px;
    }
}

  </style>
</head>
<body>

<div class="login-container">
  <h2 class="glow-text">Candidate Login</h2>
  <form action="candi_loginback.php" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">


<a href="forgotbtn_candi.php" class="center-button no-underline">
    <button type="button">Forgot Password</button>
</a>
<div class="para">
  <p>Don't have an account? <a href="candi_signupfront.php">Signup</a></p>
</div>



    
  </form>
</div>

</body>
</html>
