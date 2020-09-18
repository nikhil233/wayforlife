<?php

/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/
date_default_timezone_set('Asia/Kolkata');
$mysqli = new mysqli("localhost", "root", "", "wayforlife");

//$res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
//$row = mysqli_fetch_assoc($res);
	
?>
