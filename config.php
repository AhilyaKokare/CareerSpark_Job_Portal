<?php
//define() is global variable
define("server","localhost");  //database servername is localhost
define("username","root");  //database username is root
define("password","");   //database password is blank
define("dbname","job_portal");  // database name is website_demo


//mysql_connect is used forconnectivity
$con = mysql_connect(server,username,password) OR die(
    mysql_error());
    mysql_select_db(dbname, $con) OR die(mysql_error());

?> 