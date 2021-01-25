<?php
$con = mysqli_connect("localhost","root","","db_issm");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
 
$db_select = mysqli_select_db($con, "db_issm");
if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

?>