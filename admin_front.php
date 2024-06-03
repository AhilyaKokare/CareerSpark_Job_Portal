<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.ico">
  <title>Admin</title>
  <style>
    /* Responsive */
  body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

.welcome-text {
  text-align: center;
  margin-top: 50px; /* Adjust as needed */
}

.welcome-text h1 {
  font-size: 32px;
  color: #333;
}

.login-form {
  max-width: 300px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.login-form label {
  display: block;
  margin-bottom: 5px;
}

.login-form p {
  margin-bottom: 15px;
}

.login-form button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.login-form button:hover {
  background-color: #0056b3;
}

.data-tables {
  display: flex;
  justify-content: space-around; /* Adjust as needed */
  margin-top: 50px;
  flex-wrap: wrap; /* Add wrap to adjust items for smaller screens */
}

.employee-table,
.candidate-table {
  flex: 1;
  margin: 0 10px;
  min-width: 280px; /* Add minimum width to prevent items from getting too small */
}

.table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #ddd; /* Border color */
}

.table th,
.table td {
  padding: 8px;
  text-align: left;
}

.table th {
  background-color: #f2f2f2; /* Header background color */
  color: #333;
}

.table tr:nth-child(even) {
  background-color: #f2f2f2; /* Even row background color */
}

/* Responsive Design */
@media (max-width: 768px) {
  .welcome-text h1 {
    font-size: 28px;
  }

  .login-form {
    padding: 15px;
  }

  .data-tables {
    flex-direction: column;
    align-items: center; /* Center items on smaller screens */
  }

  .employee-table,
  .candidate-table {
    margin: 20px 0; /* Add margin between tables on smaller screens */
  }
}

@media (max-width: 480px) {
  .welcome-text h1 {
    font-size: 24px;
  }

  .login-form {
    padding: 10px;
  }

  .data-tables {
    margin-top: 30px;
  }

  .employee-table,
  .candidate-table {
    margin: 10px 0; /* Reduce margin between tables on extra small screens */
  }

  .table th,
  .table td {
    padding: 5px; /* Reduce padding in table cells on extra small screens */
  }
}

 
</style>
</head>
<body>
  <div class="welcome-text">
    <h1>Welcome!</h1>
    <div class="login-form">
        <h3>Email for Reply candidate and employee mails</h3>
      <label for="email">Email:</label>
      <p>jobportal2354@gmail.com</p>
      <label for="password">Password:</label>
      <p>Jobportal@123</p>
      <a href="index.php"><button>Visit Website</button></a>
    </div>
  </div>                                                      

<h3 style="text-align: center; margin-top:50px; font-size:30px">Employees Data</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>                    
            </tr>
        </thead>
            <tbody>
                <?php 
                    $con = mysqli_connect("localhost","root","","job_portal");

                    $query = "SELECT * FROM signup_user";
                    $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                    <tr>
                                        <td><?= $row['su_id']; ?></td>
                                        <td><?= $row['su_name']; ?></td>
                                        <td><?= $row['su_email']; ?></td>
                                        <td><?= $row['su_contact']; ?></td>
                                    </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <tr>
                                    <td colspan="4">No Record Found</td>
                                </tr>
                            <?php
                        }
                ?>

            </tbody>
    </table>



<h3 style="text-align: center; margin-top: 40px; font-size:30px">Candidate data</h3>

<table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>                    
            </tr>
        </thead>
            <tbody>
                <?php 
                    $con = mysqli_connect("localhost","root","","job_portal");

                    $query = "SELECT * FROM signup_candi";
                    $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                    <tr>
                                        <td><?= $row['sc_id']; ?></td>
                                        <td><?= $row['sc_name']; ?></td>
                                        <td><?= $row['sc_email']; ?></td>
                                        <td><?= $row['sc_cont']; ?></td>
                                    </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <tr>
                                    <td colspan="4">No Record Found</td>
                                </tr>
                            <?php
                        }
                ?>

            </tbody>
    </table>



<h3 style="text-align: center; margin-top: 40px; font-size:30px">Jobs data</h3>

<table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Job Title</th>
                <th>Location</th>
                <th>Contact No</th>  
                <th>Email</th>  
                <th>Company Name</th>  
                <th>Posted date</th>  

            </tr>
        </thead>
            <tbody>
                <?php 
                    $con = mysqli_connect("localhost","root","","job_portal");

                    $query = "SELECT * FROM job";
                    $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                    <tr>
                                        <td><?= $row['j_id']; ?></td>
                                        <td><?= $row['j_title']; ?></td>
                                        <td><?= $row['j_loc']; ?></td>
                                        <td><?= $row['j_cont']; ?></td>
                                        <td><?= $row['j_email']; ?></td>
                                        <td><?= $row['j_cpny_name']; ?></td>
                                        <td><?= $row['j_posted']; ?></td>
                                    </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <tr>
                                    <td colspan="4">No Record Found</td>
                                </tr>
                            <?php
                        }
                ?>

            </tbody>
    </table>
                        
</body>
</html>



