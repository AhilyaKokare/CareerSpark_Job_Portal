<!DOCTYPE html>
<html>
<head>
    <title>Forgot password</title>
    <link rel="icon" href="images/favicon.ico">
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
            background-image: url("images/forgot_pass.jpg");
            background-repeat: no-repeat;
            background-size: cover; 
            background-position: center;
        }

        .forgot_container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px; /* Adjust as needed */
        }

        .forgot_container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .forgot_container input[type="text"],
        .forgot_container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        } 

        .forgot_container input[type="submit"] {
            width: 100%;
            background-color: #0000cc;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .forgot_container input[type="submit"]:hover {
            background-color: #000099;
        }

        .text-glow {
            color: black;
            text-shadow: 0 0 10px #0044cc, 0 0 20px #0044cc, 0 0 30px #0044cc, 0 0 40px #0044cc, 0 0 50px #0044cc;
        }

        .center-button {
            text-align: center;
            margin-top: 20px;
        }

        .center-button button {
            background-color: #0000cc;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .center-button button:hover {
            background-color: #000099;
        }

        .no-underline {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="forgot_container">
        <h2 class="text-glow">Candidate Forgot Password</h2>
        <p>Enter your new password below</p>
        <form id="upd" action="forgotbtn_candi_update.php" method="POST">
            <input type="text" name="email" id="email" value="" placeholder="Enter Email" required><br/><br/>
            <input type="password" name="pass" id="pass" value="" placeholder="Enter new password" required><br/><br/>
            <input type="submit" value="Submit">
        </form>
        <div class="center-button">
            <a href="candi_loginfront.php" class="no-underline"><button type="button">Back to login</button></a>
        </div>
    </div>
</body>
</html>
