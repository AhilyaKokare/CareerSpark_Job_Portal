<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Post</title>
    <link rel="icon" href="images/favicon.ico">

    <style>
        /* Responsive */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/jobpost.webp');
            background-size: cover;
        }
        .container {
            width: 90%; /* Adjusted width for responsiveness */
            max-width: 600px; /* Added max-width to prevent container from becoming too wide */
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.5); 
            backdrop-filter: blur(5px); 
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select {
            width: 100%; /* Adjusted width for responsiveness */
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box; /* Included padding and border in the width */
        }
        .form-group textarea {
            width: 100%; /* Adjusted width for responsiveness */
            padding: 10px;
            font-size: 16px;
            resize: vertical;
            box-sizing: border-box; /* Included padding and border in the width */
        }
        .submit-btn {
            text-align: center;
        }
        .submit-btn button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <?php
    // Check if the URL contains the reset parameter
    if (isset($_GET['reset']) && $_GET['reset'] === 'true') {
        // Reset the form
        echo "<script>document.getElementById('jobForm').reset();</script>";
    }
    ?>
    <div class="container">
        <h1>Post a <span style="color:#007bff;">Job</span></h1>
        <form id="jobForm" action="jobpostback.php" method="post">
            <div class="form-group">
                <label for="jobTitle">Job Title</label>
                <input type="text" id="jobTitle" name="jobTitle" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location">
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" id="contact" name="contact">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="industry">Industry</label>
                <input type="text" id="industry" name="industry">
            </div>
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" id="experience" name="experience">
            </div>
            <div class="form-group">
                <label for="employmentType">Employment Type</label>
                <select id="employmentType" name="employmentType">
                    <option value="full-time">Full Time</option>
                    <option value="part-time">Part Time</option>
                </select>
            </div>
            <div class="form-group">
                <label for="education">Education</label>
                <input type="text" id="education" name="education">
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" id="salary" name="salary">
            </div>
            <div class="form-group">
                <label for="companyName">Company Name</label>
                <input type="text" id="companyName" name="companyName">
            </div>
            <div class="form-group">
                <label for="postedDate">Posted Date</label>
                <input type="date" id="postedDate" name="postedDate">
            </div>
            <div class="submit-btn">
                <button type="submit">Submit</button><br><br>
            </div>
        </form>
    </div>
</body>
</html>
