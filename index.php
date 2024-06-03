<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerSpark</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css">

</head>
<body>

<!-- Chatbot icon -->
<div class="chat-icon" onclick="toggleChatPopup()">
        <img src="images/chatbot.webp" alt="Chatbot Icon" width="40" height="40" title="Chatbot">
    </div>

    <!-- Chatbot popup -->
    <div class="chat-popup" id="chatPopup">
        <span class="close" onclick="toggleChatPopup()">&times;</span>
        <iframe width="350" height="430" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/25a19d34-8d75-4cf0-a251-b4926b7c896f"></iframe>
    </div>
    
    
    
    
    <header>
    <nav>
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about-section">About</a></li>
            <li><a href="#blog-section">Blogs</a></li>
            <li><a href="#slideshow">Trending Jobs</a></li>
        </ul>
        <div class="buttons">
        <div class="nav-links">
          <div class="dropdown">
            <button class="dropbtn">Login</button>
            <div class="dropdown-content">
              <a href="emp_loginfront.php">Employee</a>
              <a href="candi_loginfront.php">Candidate</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Sign Up</button>
            <div class="dropdown-content">
              <a href="emp_signupfront.php">Employee</a>
              <a href="candi_signupfront.php">Candidate</a>
            </div>
          </div>
        </div>
        </div>
    </nav>
</header>

<section class="welcome-section">
    <div class="content">
      <h1>Your <span> DREAM </span>Job is Waiting</h1>
      <p style="color: white;">Discover your path to success with our CareerSpark, connecting you to a world of endless possibilities and fulfilling careers.</p>
      <a href="#slideshow"><button class="explore-btn">Explore</button></a>
    </div>
  </section>

<section class="about-section" id="about-section">
  <div class="container">
      <h2 style="font-size:35px">About Our <span style="color: #00008B;">CareerSpark</span></h2>
      <div class="about-containt">
            <p><b><span style="text-align: center; font-size: 25px ">Welcome to CareerSpark</span></b> <br/><br/>Your ultimate destination for connecting talented individuals with exciting career opportunities. At CareerSpark, we believe in bridging the gap between employers and job seekers, facilitating meaningful connections that lead to mutual success.<br/><br/>
            <b>For Job Seekers:</b>
            Looking for your dream job? Look no further! CareerSpark offers a vast array of job listings across various industries and sectors. Whether you're a recent graduate stepping into the professional world or a seasoned professional seeking new challenges, our platform provides the tools and resources you need to discover, apply for, and land your ideal job. From entry-level positions to executive roles, we've got you covered. <br/><br/>

            <b>For Employers:</b>
            Finding the right talent is crucial for business success, and CareerSpark is here to help. Our platform offers innovative recruitment solutions tailored to your needs, allowing you to reach a diverse pool of qualified candidates efficiently. Whether you're a startup, a small business, or a multinational corporation, our advanced search and screening tools streamline the hiring process, saving you time and resources.
        </p>
      </div>
  </div>
</section>

<section class="blog-section" id="blog-section">
  <h2>Blogs</h2>
  <div class="blog-container">
    <div class="blog-post">
      <img src="images/blog1.jpg" alt="Blog Post Image">
      <div class="blog-content">
        <h2>Top 10 Interview Tips to Land Your Dream Job</h2>
        <p class="date">Published on April 10, 2024</p>
        <p class="excerpt">Preparing for an interview can be nerve-wracking, but with these expert tips, you'll be ready to impress any employer.</p>
        <a href="#" class="read-more">Read More</a>
      </div>
    </div>

    <div class="blog-post">
      <img src="images/blog2.png" alt="Blog Post Image">
      <div class="blog-content">
        <h2>5 Essential Skills Every Remote Worker Should Have</h2>
        <p class="date">Published on April 5, 2024</p>
        <p class="excerpt">As remote work becomes more prevalent, it's crucial to develop these key skills to thrive in a virtual work environment.</p>
        <a href="#" class="read-more">Read More</a>
      </div>
    </div>

    <div class="blog-post">
      <img src="images/blog3.jpg" alt="Blog Post Image">
      <div class="blog-content">
        <h2>Networking Strategies for Advancing Your Career</h2>
        <p class="date">Published on April 15, 2024</p>
        <p class="excerpt">Learn effective networking strategies that can help you expand your professional connections and advance your career to new heights.</p>
        <a href="#" class="read-more">Read More</a>
      </div>
    </div>
  </div>
</section>

<section class="slideshow" id="slideshow">
<h2 style="padding-top: 30px;  font-size:35px">Trending <span style="color: #00008B;">jobs</span></h2>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="images/slideshow1.jpg" style="width:100%">
  <div class="text" style="color: black;">Software Development</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="images/slideshow2.jpg" style="width:100%">
  <div class="text">Data Analytics</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="images/slideshow3.jpg" style="width:100%">
  <div class="text">Artificial Intelligence</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="images/slideshow4.jpg" style="width:100%">
  <div class="text">Cyber Security</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="images/slideshow5.jpg" style="width:100%">
  <div class="text">Digital Marketing</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="images/slideshow6.jpg" style="width:100%">
  <div class="text">Health Care</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>
</section>


<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h3>Jobs by Places</h3>
      <ul>
        <li>Mumbai</li>
        <li>Pune</li>
        <li>Hydrabad</li>
        <li>Nashik</li>
        <li>Solapur</li>
        <!-- Add more locations here -->
      </ul>
    </div>
    <div class="footer-section">
      <h3>Jobs by Stream</h3>
      <ul>
        <li>Engineering</li>
        <li>Marketing</li>
        <li>Finance</li>
        <li>Teaching</li>
        <li>Art</li>
        <!-- Add more streams here -->
      </ul>
    </div>
    <div class="footer-section">
      <h3>Follow Us</h3>
      <ul class="social-icons">
        <li><a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
        <li><a href="https://twitter.com/i/flow/login" target="_blank"><i class='bx bxl-twitter'></i></a></li>
        <li><a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a></li>
        <li><a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
      </ul>
    </div>
  </div>
</footer>



<script src="script.js"></script>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>