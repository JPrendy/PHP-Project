<!--Login_page.php – this page checks if you fulfil the login requirements, 
if you do you will brought into the main website where you allow to search and reserve.
However if you do not fulfil the login requirements, it will  bring you to main1.php again to try and login again.-->




<!--this is the html code for the header and menu which links to the other pages-->


<a href="http://localhost/WebD1/main.php"">
<div id="menu" style="background-color:#3385D6;height:120px;width:780px;float:left;text-align:right;">
  <b> <font size=6> <h1 id="style"><i> My Library</i> </h1></font></b>
</div>
<div id="header" style="background-color:#3385D6;height:120px;width:550px;float:left;text-align:left;">
    <br></br>
	<br></br>
	<b><i>all your books in one place</i></b>
</div></a>


<table summary="This is the main table" width="1340" height="60"> 
<br ondblclick="detectClick()">
<!--We are using images in the banner to make them appear like how a real website would-->
<tr id="style2" align="center"> 
<td><a href="http://localhost/WebD1/search.php" ondblclick="detectClick()"><img src= "search.png" alt="banner" width="273" height="60"/></a></td>


 <td><a href="http://localhost/WebD1/reserved.php"ondblclick="detectClick()"><img src= "reserved.png" alt="banner" width="273" height="60"/></a></td>
  <td><a href="http://localhost/WebD1/CategoryID.php"ondblclick="detectClick()"><img src= "categories.png" alt="banner" width="273" height="60"/></a></td>
   <td><a href="http://localhost/WebD1/booklist.php"ondblclick="detectClick()"><img src= "booklist.png" alt="banner" width="273" height="60"/></a></td>
     <td><a href="http://localhost/WebD1/logout.php"ondblclick="detectClick()"><img src= "logout.png" alt="banner" width="223" height="60"/></a></td>
</tr>
</table>
<?php
session_start()//this starts the session
?>



<?php

// Grab User submitted information
$user=$_POST["Username"];
$pass=$_POST["Password"];

 $_SESSION["Username"]="$user" ; //this sets the session, which can be used later


// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("book",$con);
//this is where it see if the name inputed is part of the users tables
$result = mysql_query("SELECT * FROM users WHERE Username = '$user' AND Password='$pass'")or trigger_error(mysql_error().$sql);;

$row = mysql_fetch_array($result);

if($row["Username"]==$user && $row["Password"]==$pass)
{
    echo"You are a validated user.";
	header("location:main.php"); //this brings you here if you fulfil the login conditions
	}
else
{

	header("location:login5.php");//this brings you here if you don't fulfil the login conditions
	    echo"Sorry, your credentials are not valid, Please try again.";
	}
?>

<!--this is the footer of the page-->
  <div id="footer" style="clear:both;text-align:center;height:30px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
  <h4>Copyright &copy; Mylibrary.com</h4>
</div>