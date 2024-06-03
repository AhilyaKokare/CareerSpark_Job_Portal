<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/favicon.ico">
<title>Candidate Sign Up</title>
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
    background-image: url("images/signup.jpg");
    background-repeat: no-repeat;
    background-size: cover; /* Set background size to cover entire width while maintaining aspect ratio */
    background-position: center; 
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="password"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 30%;
    padding: 10px;
    background-color: #ac00e6;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 35%;
}

input[type="submit"]:hover {
    background-color: #8600b3;
}

.para {
    padding: 10px;
    text-align: center;
}

.glow-text {
    font-size: 30px;
    text-shadow: 0 0 10px #e600e6, 0 0 20px #000099, 0 0 30px #e600e6;
    animation: glow 1.5s infinite alternate;
}

@keyframes glow {
    0% {
        text-shadow: 0 0 10px #e600e6, 0 0 20px #000099, 0 0 30px #e600e6;
    }
    50% {
        text-shadow: none;
    }
    100% {
        text-shadow: 0 0 20px #000099, 0 0 30px #e600e6, 0 0 40px #000099;
    }
}

@media screen and (max-width: 600px) {
    .container {
        max-width: 90%;
    }
    
    input[type="submit"] {
        width: 50%;
        margin-left: 25%;
    }
}

@media screen and (max-width: 400px) {
    input[type="submit"] {
        width: 70%;
        margin-left: 15%;
    }
}
</style>
</head>
<body>
<div class="container">
    <h2 class="glow-text">Candidate Sign Up</h2>
    <form action="candi_signupback.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="contact">Contact:</label>
        <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Sign Up">
    </form>

    <div class="para">
        <p>Already have an account? <a href="candi_loginfront.php">Login</a></p>
    </div>

</div>
</body>
</html>
