<!--Search_by_category- this brings up all the books that you asked for by the book category, it also allows you to check if a book is reserved or not
(1)If the book is reserved it will display a message saying that it is already booked when you click to reserve it.
(2)if the book isn’t registered it will be reserved into the reserve table, this says the book you reserved, who reserved it and when you reserved it.
-->




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
// Connect to the database
$db = mysql_connect("localhost","root","","book");
// Make sure we connected succesfully
if(! $db)
{
    die('Connection Failed'.mysql_error());
}
mysql_select_db("book") or die(mysql_error());

echo '<table border="1">'."\n";
if ( isset($_POST['CategoryID']) ) {
$cat = $_POST['CategoryID'];//this calls all the information in books that matches the category
$result = mysql_query ("Select * FROM  books Where CategoryID = '$cat'") or trigger_error(mysql_error().$sql);
	echo "<tr><td>";
	echo "ISBN";
	echo "</td><td>";
	echo "Booktitle";
	echo "</td><td>";
	echo "Author";
	echo "</td><td>";
    echo "Edition";
	echo "</td><td>";
	 echo "Year";
	echo "</td><td>";
	 echo "CategoryID";
	echo "</td><td>";
	 echo "Reservation";
    echo("</td><td>\n");
    echo"Add Reservation";
while ( $row = mysql_fetch_row($result) ) {
   
//this displays all the information in the rows
echo "<tr><td>";
echo($row[0]);
echo "</td><td>";
echo($row[1]);
echo "</td><td>";
echo($row[2]);
echo "</td><td>";
echo($row[3]);
echo "</td><td>";
echo($row[4]);
echo "</td><td>";
echo($row[5]);
echo "</td><td>";
echo($row[6]);
echo("</td><td>\n");
//echo('<a href="edit.php">Add</a> ');
echo('<form method="post"><input type="hidden" ');
echo('name="ISBN" value="'.$row[0].'">'."\n");
echo('<input type="submit" value="Reserve" name="submit">');
echo("\n</form>\n");
//this will link to you another page


}
echo "</table>\n";
}

// $_SESSION="$user" ;
$db = mysql_connect("localhost", "root","", "book") or 
die(mysql_error());
mysql_select_db("book") or die(mysql_error());

require_once "db.php";

if ( isset($_POST['submit']) &&
isset($_POST["ISBN"])) {
$user2 = $_POST["ISBN"];
$user = $_SESSION["Username"];//this calls the session used somewhere else
$d=date("Y-m-d");// this variable stores the current date
$r = mysql_query("SELECT Reservation FROM books where ISBN = '$user2' ");
$row = mysql_fetch_array($r);
$result_r = $row['Reservation'];
// echo"$result_r";
 
if($result_r=='Y')
{
echo "Sorry, the book is already reserved";



}
elseif ($result_r=='N')
{
$sql = "INSERT INTO reservations (ISBN,Username,ReservedDate)
VALUES ('$user2','$user','$d') ";//this is where the insertion of the values are stored in reservation
echo "<p>\n$sql\n</p>\n";
mysql_query($sql);
}

}
mysql_close($db);
?>

<?php
if ( isset($_POST['submit']) &&
isset($_POST["ISBN"])) {
$user2 = $_POST["ISBN"];

// Connect to the database
$con = mysqli_connect("localhost","root","","book");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}


//this is where it updates the reservations if only if the book hasn't already been reserved
$sql = "UPDATE books SET Reservation='Y'  WHERE ISBN='$user2' and Reservation='N'";

if (mysqli_query($con, $sql)) {
    echo "";
} else {
    echo "Error updating record: " . mysqli_error($con);
}



mysqli_close($con);
}
?>


<br></br>
<a href="http://localhost/WebD1/search.php" ondblclick="detectClick()"><img src= "back.png" alt="banner" width="203" height="60"/></a>




<!--this is the footer of the page-->
  <div id="footer" style="clear:both;text-align:center;height:30px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
  <h4>Copyright &copy; Mylibrary.com</h4>
</div>