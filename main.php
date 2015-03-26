<!--Main.php- this is the main page (hub) that you are brought
 into when you fulfil the login requirements and it allows you to search a book, 
 reserve a book, see your reserved books, see the booklist, see the book categories and allow you to logout.-->


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
session_start();// this starts the session which finds values that were stored in other places
?>
 
 <br></br>
<?php

$user = $_SESSION["Username"];  // this finds the session called username and and store it as a variable

echo"<font size=6> Welcome Back User: $user";
?>




<!--this is the footer of the page-->
  <div id="footer" style="clear:both;text-align:center;height:30px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
  <h6>Copyright &copy; Mylibrary.com</h6>
</div>


