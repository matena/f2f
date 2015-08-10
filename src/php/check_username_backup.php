<?php // check_username.php
include_once 'common.php';
include_once 'db.php';


$loginRequired = $_GET['u'];
$connect();

$query = "SELECT * FROM User WHERE '$field' = '$loginRequired'";
$result = mysql_query($query);
if (mysql_num_rows($result) != 0) { 
	echo "<font color=red>Not available <strong>:(</strong> </font>"; 
} else {
	echo "<font color=green>Available! <strong>:)</strong> </font>"; 
}
?>