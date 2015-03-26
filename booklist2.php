<!-- Booklist2.php- this displays the next 5 books in the database-->

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
     <td><a href="http://localhost/WebD1/logout.php"ondblclick="detectClick()"><img src= "logout.png" alt="banner" width="215" height="60"/></a></td>
</tr>
</table>


<!--this displays the all the books in the table books but it limits to the second 5 rows in the book-->
<h2>This is the current list of books in our library</h2>
<?php
echo '<table border="1">'."\n";
$db = mysql_connect("localhost", "root","","book") or 
die(mysql_error());
mysql_select_db("book") or die(mysql_error());
$result = mysql_query("SELECT * FROM 
books LIMIT 5 offset 5");
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
while ( $row = mysql_fetch_row($result) ) {
echo "<tr><td>";
echo($row[0]);
echo "</td><td>";
echo($row[1]);
echo("</td><td>");
echo($row[2]);
echo("</td><td>");
echo($row[3]);
echo("</td><td>");
echo($row[4]);
echo("</td><td>");
echo($row[5]);
echo("</td><td>");
echo($row[6]);


}
echo "</table>\n";
mysql_close($db);
?>
<br></br>
<a href="http://localhost/WebD1/booklist.php" >Page:1</a>
<a href="http://localhost/WebD1/booklist2.php" >Page:2</a>
<a href="http://localhost/WebD1/booklist3.php" >Page:3</a>


<!--this is the footer of the page-->
  <div id="footer" style="clear:both;text-align:center;height:30px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
  <h4>Copyright &copy; Mylibrary.com</h4>
</div>