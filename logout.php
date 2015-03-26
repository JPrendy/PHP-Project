<!--Logout.php- this page logouts the current user on the website
 and brings them back to main1.php where they can login or register again.-->


<?php
session_start();
unset($_SESSION['Username']);
session_destroy();//this is where it destroys the sessions you stored
?>

<?php

$db = mysql_connect("localhost", "root","","book") or 
die(mysql_error());
mysql_select_db("book") or die(mysql_error());

	header("location:main1.php");//when loged out it brings you to main1.php
?>