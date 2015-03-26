<!--Delete.php-this page removes the reserved book you ask to 
be removed and then update the books saying that the book can be reserved.-->



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
// Connect to the database
$con = mysql_connect("localhost","root","","book");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysql_select_db("book") or die(mysql_error());

//this deletes the book that was once reserved
if ( isset($_POST['ISBN']) ) {
$ISBN = $_POST['ISBN'];
$sql = "DELETE FROM reservations WHERE ISBN = '$ISBN'";
echo "<pre>\n$sql\n</pre>\n";
mysql_query($sql);
}
?>

<?php


// Connect to the database
$con = mysqli_connect("localhost","root","","book");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}


//this update the books changing the reservation to it isn't
if ( isset($_POST['ISBN']) ) {
$ISBN = $_POST['ISBN'];
$sql = "UPDATE books SET Reservation='N'  WHERE ISBN='$ISBN' && Reservation='Y'";

if (mysqli_query($con, $sql)) {
    echo "You have removed the reservation";
} else {
    echo "Error updating record: " . mysqli_error($con);
}
}
?>

<h2>To remove a reservation, type in the ISBN </h2>
<form method="post">
<p>ISBN:
<input type="text" name="ISBN"></p>
<p><input type="submit" value="Unreserve"/></p>
</form>

<!--this is the footer of the page-->
  <div id="footer" style="clear:both;text-align:center;height:30px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
  <h4>Copyright &copy; Mylibrary.com</h4>
</div>