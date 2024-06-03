<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="searchjob.css">
    <script>    
        function resetForm() {
            document.getElementById("searchForm").reset();
            document.getElementById("searchResults").style.display = "none";
            document.querySelectorAll('.job-container').forEach(container => {
                container.style.display = "flex";
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Job <span style="color: #00008B;">Search</span></h1>
        <form action="" method="POST" id="searchForm">
            <div class="search-filters">
                <input type="text" name="searchname1" placeholder="Job Title">
                <input type="text" name="searchname2" placeholder="Location">
                <input type="text" name="searchname3" placeholder="Part time/Full time">
                <input type="text" name="searchname4" placeholder="Education">
                <input type="text" name="searchname5" placeholder="Salary">
                <input type="submit" name="search" id="search" value="Search">
                <input type="button" value="Reset" onclick="resetForm()">
            </div>
        </form>

        <div id="searchResults">

        <?php
            require_once("config.php");

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $search1 = $_POST["searchname1"];
                $search2 = $_POST["searchname2"];
                $search3 = $_POST["searchname3"];
                $search4 = $_POST["searchname4"];
                $search5 = $_POST["searchname5"];

                $qry = mysql_query("SELECT * FROM job_portal.job WHERE (j_title LIKE '$search1') OR (j_loc LIKE '$search2') OR (j_type LIKE '$search3') OR (j_edu LIKE '$search4') OR (j_salary LIKE '$search5') ");

                if (mysql_num_rows($qry) > 0) {

                        while ($row = mysql_fetch_array($qry)) {

                            echo "<div class='job-card'>";
                                echo "<h2>" . $row["j_title"] . "</h2>";
                                echo "<p>Location: " . $row["j_loc"] . "</p>";
                                echo "<p>Contact: " . $row["j_cont"] . "</p>";
                                echo "<p>Email: " . $row["j_email"] . "</p>";
                                echo "<p>Industry: " . $row["j_industry"] . "</p>";
                                echo "<p>Experiance: " . $row["j_experience"] . "</p>";
                                echo "<p>Type: " . $row["j_type"] . "</p>";
                                echo "<p>Education: " . $row["j_edu"] . "</p>";
                                echo "<p>Company: " . $row["j_cpny_name"] . "</p>";
                                echo "<p>Posted date: " . $row["j_posted"] . "</p>";

                            echo "</div>";
                        }
                    echo "<style>#jobCardContainer { display: none; }</style>"; // Hide job cards
                } 
            }
        ?>  
        
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (mysql_num_rows($qry) <= 0) {
                    echo "<p>No results found.</p>";
                    echo "<style>.job-container { display: none; }</style>"; // Hide all job containers
                }
            }
        ?>

        </div>
        <div class="job-container" id="jobCardContainer">
            <div class="job-card">
                <h2>Senior Software Developer</h2>
                <p>Company: TechGenius Solutions Pvt. Ltd.</p>
                <p>Location: Bangalore, Karnataka</p>
                <p>Description: Join our innovative team to develop scalable software solutions for global clients, utilizing the latest technologies.</p>
            </div>
            <div class="job-card">
                <h2>Marketing Manager</h2>
                <p>Company: BrandBoosters India Pvt. Ltd.</p>
                <p>Location: Mumbai, Maharashtra </p>
                <p>Description: Lead marketing campaigns and brand initiatives to drive customer acquisition and market penetration in the competitive Indian market.</p>
            </div>
            <div class="job-card">
                <h2> Data Analyst</h2>
                <p>Company: DataDriven Insights Pvt. Ltd.</p>
                <p>Location: Hyderabad, Telangana</p>
                <p>Description: Analyze large datasets to derive actionable insights, inform strategic decision-making, and optimize business processes.</p>
            </div>
        </div>

        <div class="job-container" id="jobCardContainer">
            <div class="job-card">
                <h2>UI/UX Designer</h2>
                <p>Company: CreativeMinds Innovations Pvt. Ltd.</p>
                <p>Location: Pune, Maharashtra</p>
                <p>Description: Design intuitive and visually appealing user interfaces for web and mobile applications, enhancing user experience and engagement.</p>
            </div>
            <div class="job-card">
                <h2> Financial Analyst</h2>
                <p>Company: CapitalEdge Financial Services Pvt. Ltd.</p>
                <p>Location: Delhi, NCR</p>
                <p>Description: Conduct financial analysis, risk assessment, and investment research to support clients in making informed financial decisions.</p>
            </div>
            <div class="job-card">
                <h2>Product Manager</h2>
                <p>Company: ProductX India Pvt. Ltd.</p>
                <p>Location: Chennai, Tamil Nadu</p>
                    <p>Description: Drive the development and launch of innovative products, collaborating with cross-functional teams to deliver solutions that meet market needs.</p>
            </div>
        </div>

        <div class="job-container" id="jobCardContainer">
            <div class="job-card">
                <h2>HR Business Partner</h2>
                <p>Company: TalentConnect Solutions Pvt. Ltd.</p>
                <p>Location: Gurgaon, Haryana</p>
                <p>Description:  Partner with business leaders to develop and implement HR strategies, initiatives, and programs that support organizational objectives.</p>
            </div>
            <div class="job-card">
                <h2>Sales Executive</h2>
                <p>Company: SalesForce India Pvt. Ltd.</p>
                <p>Location: Kolkata, West Bengal</p>
                <p>Description: Execute sales strategies, build client relationships, and achieve revenue targets in the dynamic Indian market.</p>
            </div>
            <div class="job-card">
                <h2>Content Writer</h2>
                <p>Company: ContentCrafters India Pvt. Ltd.</p>
                <p>Location: Ahmedabad, Gujarat</p>
                <p>Description: Create compelling and SEO-friendly content across various platforms to drive brand awareness and engage target audiences.</p>
            </div>
        </div>

        
    </div>
</body>
</html>



