<!--Search.php- this page allows you to search for a book by book 
title and/or Author and by book category. It will then get the books that you asked for. -->

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
<html>
<head>

<title> search</title>
</head>
<body>
 <div id="menu" style="background-color:height:1010px;width:800px;float:left;">
<h2> Here is where you can search for a book by bookTitle and Author</h2>
<!--this is where you can search a book by booktitle and author-->
    <form method="post" action="search_by_title.php" >
        <table border="1" >
            <tr>
                <td>BookTitle</label></td>
                <td><input type="text" 
                  name="BookTitle" ></td>
            </tr>
        
		         <tr>
                <td>Author</label></td>
                <td><input type="text" 
                  name="Author" ></td>
            </tr>
			
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
	
<br></br>
	<h2> Here is where you can search for a book by category</h2>
	<!--this is where you can search a book by bookcategory-->
    <form method="post" action="search_by_category.php" >
        <table border="1"  >
            <tr>
                <td>Book Category</label></td>
				<!--the form has radio button which brings the value when you submit-->
                <td><input type="radio" name="CategoryID" value="1">Health
                <input type="radio" name="CategoryID" value="2">Business
			    <input type="radio" name="CategoryID" value="3">Biography
	   	      <input type="radio" name="CategoryID" value="4">Technology
		       <input type="radio" name="CategoryID" value="5">Travel
				<input type="radio" name="CategoryID" value="6">Self-Help
	    	     <input type="radio" name="CategoryID" value="7">Cookery
			      <input type="radio" name="CategoryID" value="8">Fiction
                </td>
            </tr>
        
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
		</form>
		</div>
		
		
	
	<br></br>
<br></br>
<br></br>
<!--this is the footer of the page-->
  <div id="footer" style="clear:both;text-align:center;height:80px;width:1340px;float:bottom;">
<br></br>
<br></br>
<br></br>
<br></br>
  <h4>Copyright &copy; Mylibrary.com</h4>
</div>
		 
