

<!--Main1.php  - This is the main page when you try to login , it allows the user to either login or register in this page-->

<!--this is the html code for the header and menu which links to the other pages-->
<a href="http://localhost/WebD1/main1.php"">
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

<br></br>


<!--this displays the login page-->
<html>
<head>
<div id="menu" style="background-color:height:910px;width:750px;float:left;">
<title> Login Form</title>
</head>
<h2>Login from Here:</h2>
<body>
    <form method="post" action="login_page.php" >
	
        <table border="2" >
            <tr>
                <td>Username</label></td>
                <td><input type="text" 
                  name="Username" ></td>
            </tr>
            <tr>
                <td>Password</label></td>
                <td><input type="Password" 
                  name="Password" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
</body>
</html>
</div>

<!--this displays the register page-->
<div id="menu" style="background-color:height:910px;width:400px;float:left;">
<?php
$db = mysql_connect("localhost", "root","", "book") or 
die(mysql_error());
mysql_select_db("book") or die(mysql_error());

require_once "db.php";
if ( isset($_POST['Username'])){
$n = $_POST['Username'];
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
header("location:main1.php");

}

if($p==''){
echo"<script>alert('please enter your Password')</script>";
header("location:main1.php");

}


$sql = "INSERT INTO users (Username, Password, FirstName,Lastname,AddressLine,AddressLine2,City,Telephone,Mobile)
VALUES ('$n', '$p', '$f','$s','$a','$k','$c','$t','$m')";
echo "<p>\n$sql\n</p>\n";
mysql_query($sql);
}
?>
<h2>Here is where you can register:</h2>

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
</div>





<!--this is the footer of the page-->
  <div id="footer" style="clear:both;text-align:center;height:30px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
  <h4>Copyright &copy; Mylibrary.com</h4>
</div>