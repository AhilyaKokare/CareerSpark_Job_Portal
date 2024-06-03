<?php
include ("emp_lock.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="emp_home.css">
    <link rel="icon" href="images/favicon.ico">
    <title>Employee Home</title>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init({
                publicKey: "R_cdcp1qAAgJijtNm",
            });
        })();
    </script>


</head>
<body>


    <!-- Header -->
<header>
    <nav>
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="#about-containt">About</a></li>
            <li><a href="#services-section">Services</a></li>
            <li><a href="#message-section">Contact</a></li>
        </ul>
        <div class="buttons">
            <a href="jobpost.php"><button class="dark-blue">PostJob</button></a>
            <a href="index.php"><button class="dark-blue">Log Out</button></a>
        </div>
    </nav>
</header>

<!-- About section -->
<div class="about-containt" id="about-containt">
    <h2 style="padding-top: 2%; font-size: 35px;">About <span style="color: #00008B;">Us</span> </h2>
    <div class="about-content">
        <p>Welcome to CareerSpark, your premier destination for connecting job seekers with exciting career opportunities and empowering employers to find top talent. At CareerSpark, we understand the critical importance of matching the right candidate with the right job, and we're dedicated to making that process efficient, effective, and enjoyable for both employers and job seekers alike.</p>
        <div class="popup">
            <h2><span class="typing">WHO WE ARE ?</span></h2>
            <p>CareerSpark is more than just a job portal - we're your dedicated partner in navigating the ever-evolving landscape of employment opportunities. Founded by a team of passionate professionals with extensive experience in both recruitment and technology, CareerSpark was born out of a shared vision to revolutionize the way people find jobs and companies hire talent.
            </p>

            <h2><span class="typing">WE'RE DIFFERENT THAN THE REST</span></h2>
            <p>At CareerSpark, we're not just another job portal - we're different, and here's why. Unlike traditional job platforms that simply match resumes with job descriptions, we believe in the power of human connection and personalized experiences. We understand that finding the right job or candidate is more than just a transaction; it's about building relationships and fostering meaningful connections. That's why we've designed CareerSpark to be more than just a job board - it's a dynamic community where job seekers and employers come together to collaborate, learn, and grow. From our innovative matching algorithms that go beyond keywords to our interactive tools and resources designed to empower users at every stage of their career journey, we're committed to redefining the way people find jobs and companies hire talent. With CareerSpark, you're not just a resume or a job listing - you're part of a vibrant ecosystem where possibilities are endless, and opportunities are limitless. Join us today and experience the difference for yourself.
            </p>
        </div>
    </div>
</div>


    
<div class="services-section" id="services-section">
    <h2>Career <span style="color: #00008B;">Support</span> </h2>
    <div class="service-container">
        <div class="service">
            <h3>Job Search Assistance</h3>
            <p>Our CareerSpark offers comprehensive search capabilities to help you find the perfect job that matches your skills, experience, and preferences. With advanced filters and personalized recommendations, navigating through thousands of job listings has never been easier.</p>
        </div>
        <div class="service">
            <h3>Employer Solutions</h3>
            <p>For employers, our CareerSpark offers a range of solutions to streamline the hiring process. Access a pool of qualified candidates, post job openings, and manage applications seamlessly. Our platform is designed to help employers find the right talent efficiently and effectively.</p>
        </div>
        <div class="service">
            <h3>Remote Work Opportunities</h3>
            <p>Explore remote job opportunities from leading companies worldwide. Our CareerSpark features remote-friendly job listings across various industries, allowing you to work flexibly from anywhere while maintaining a healthy work-life balance.</p>
        </div>
    </div>
</div>



<!-- Review section -->
<div class="review-icon" onclick="openReviewPopup()">
<img src="images/review.png" alt="Review Icon" height="50" width="50" title="Review">
</div>

<div class="review-popup" id="reviewPopup">
    <div class="popup-content">
        <span class="close" onclick="closeReviewPopup()">&times;</span>
        <h2>Leave a Review</h2>
        <form id="reviewForm" onsubmit="submitReview(event)">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="rating">Rating (1-5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>




    <section class="getintouch-section">
        <h2>GET IN <span style="color: #00008B;">TOUCH</span></h2>
        <div class="contact-info">
            <div class="info">
                <h3>Address</h3>
                <p>Ranjani Raod<br>Pandharpur, Maharashtra, 413304<br>India</p>
            </div>
            <div class="info">
                <h3>Phone</h3>
                <p>9988776655</p>
            </div>
            <div class="info">
                <h3>Email</h3>
                <p>jobportal2354@gmail.com</p>
            </div>
        </div>
    </section>

    <!-- <section class="msg-section" id="msg-section"> -->
        <div class="message-section" id="message-section">
            <div class="left-section">
                <div class="message-heading">
                    <h2>Message <span style="color: #00008B;">Us</span> </h2>
                    <p>Feel free to drop us a message. We'll get back to you as soon as possible.</p>
                    <img src="images/logo.png" alt="Company Logo">
                </div>
            </div>
            <div class="right-section">
                <h2>Fill <span style="color: #00008B;">form</span></h2>
                <form action="emp_home_sbmit_btn.php" method="post" id="contactForm">
                    <div class="form-group">
                        <label for="contactName">Name:</label>
                        <input type="text" id="contactName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="contactEmail">Email:</label>
                        <input type="email" id="contactEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contactMessage">Message:</label>
                        <textarea id="contactMessage" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        
    <!-- </section> -->


</body>
</html>




<script>
// Send email function
function SendMail(event) {
    event.preventDefault(); // Prevent default form submission

    var params = {
        from_name: document.getElementById("contactName").value,
        email_id: document.getElementById("contactEmail").value,
        message: document.getElementById("contactMessage").value
    }

    emailjs.send("service_o9lfc02", "template_87bq2j2", params).then(function (res) {
        // alert("Success! " + res.status); 
        alert("Application Submitted Successfully!\nThank you for submitting your application. We will review your information and get back to you shortly.");
        document.getElementById("contactForm").reset();
    }); 
}

// Attach the SendMail function to the form's submit event
document.getElementById('contactForm').addEventListener('submit', SendMail);





// Open review popup
function openReviewPopup() {
    document.getElementById("reviewPopup").style.display = "block";
}

// Close review popup
function closeReviewPopup() {
    document.getElementById("reviewPopup").style.display = "none";
}

// Show alert after submission
function submitReview(event) {
    event.preventDefault(); // Prevent form submission
    document.getElementById("reviewForm").reset();
    closeReviewPopup(); // Close the popup window
    alert("Review Submitted Successfully!"); // Show alert
}
</script>
