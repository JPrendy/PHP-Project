<!--Login5.php- is a page that allows you to login as long as you’re registered with the system-->


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


<!--this is the page where you login from-->
<h2>Login from Here:</h2>

<html>
<head>

<title> Login Form</title>
</head>
<body>
    <form method="post" action="login_page.php" >
	<!--the form brings you to vlogin.php after enter submit-->
	<!--this goes to see if you have the login credentials-->
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

<!--this is the footer of the page-->
  <div id="footer" style="clear:both;text-align:center;height:30px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
  <h4>Copyright &copy; Mylibrary.com</h4>
</div>