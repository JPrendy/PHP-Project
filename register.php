
<!--Register.php- this is a page that allows you insert yourself into the database, if you fulfil the form.-->



<a href="http://localhost/WebD1/main1.php"">
<!--this is the page where you register-->


<!--this is the html code for the header and menu which links to the other pages-->

<div id="menu" style="background-color:#3385D6;height:120px;width:770px;float:left;text-align:right;">
  <b> <font size=6> <h1 id="style"><i> My Library</i> </h1></font></b>
</div>

<div id="header" style="background-color:#3385D6;height:120px;width:540px;float:left;text-align:left;">
    <br></br>
	<br></br>
	<b><i>all your books in one place</i></b>
</div></a>


<table summary="This is the main table" width="1300" height="60"> 
<br ondblclick="detectClick()">
<!--We are using images in the banner to make them appear like how a real website would-->
<tr id="style2" align="center"> 

<td><a href="http://localhost/WebD1/login5.php" ondblclick="detectClick()"><img src= "login1.png" alt="banner" width="650" height="60"/></a></td>

<td><a href="http://localhost/WebD1/register.php"ondblclick="detectClick()"><img src= "register1.png" alt="banner" width="650" height="60"/></a></td>

</tr>
</table>




<?php
$db = mysql_connect("localhost", "root","", "book") or 
die(mysql_error());//with this php it will connect to my database called book
mysql_select_db("book") or die(mysql_error());// if it cannot connect it will display an errror

require_once "db.php";// requires once
if ( isset($_POST['Username'])){ //this is where it need the username in order to work
$n = $_POST['Username'];  // this is where all the form submissions go and stored in its own variables
$p = $_POST['Password'];
$f = $_POST['FirstName'];
$s = $_POST['Lastname'];
$a = $_POST['AddressLine'];
$k = $_POST['AddressLine2'];
$c = $_POST['City'];
$t = $_POST['Telephone'];
$m = $_POST['Mobile'];


if($n||$k||$f||$s==''){
echo"<script>alert('please enter your name')</script>";
header("location:register.php");

}

if($p==''){
echo"<script>alert('please enter your Password')</script>";
header("location:register.php");

}



$sql = "INSERT INTO users (Username, Password, FirstName,Lastname,AddressLine,AddressLine2,City,Telephone,Mobile)
VALUES ('$n', '$p', '$f','$s','$a','$k','$c','$t','$m')";
//this is where the values is inserted into the table users.
mysql_query($sql);
}
?>
<h2>Here is where you can register:</h2>
<!-- This is where you post your information in the form-->

<h4>Add A New User</h4>
<form method="post">
<p>UserName:
<input type="text" name="Username" size="50"></p>
<p>Password:
<input type="Password" name="Password"></p>
<p>FirstName:
<input type="text" name="FirstName"></p>
<p>Surname:
<input type="text" name="Lastname"></p>
<p>AddressLine:
<input type="text" name="AddressLine"></p>
<p>AddressLine2:
<input type="text" name="AddressLine2"></p>
<p>City:
<input type="text" name="City"></p>
<p>Telephone:
<input type="text" name="Telephone"></p>
<p>Mobile:
<input type="text" name="Mobile"></p>
<p><input type="submit" value="Add New"/></p>
</form>

<!--this is the footer that is displayed at the bottom of the page-->
  <div id="footer" style="clear:both;text-align:center;height:30px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
  <h4>Copyright &copy; Mylibrary.com</h4>
</div>