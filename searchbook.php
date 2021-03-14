//InsertBooks.php
cc

//SearchBooks.php
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<form action = "DisplayBooks.php" method="get">
<br>
<center>Enter the title of the book to be searched :
<input type="text" name="search" size="48">
<br></br>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</center>
<br>
</form>
</body>
</html>


//DBConnection.php

<?php
 //Establishing connection with the database
 define('DB_SERVER', 'localhost:3306');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'books'); //where profile is the database 
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>


//DisplayBooks.php
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<br>

<?php
include("DBConnection.php");

$search = $_REQUEST["search"];

$query = "select ISBN,Title,Author,Edition,Publication from book_info where title like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["ISBN"];?> </td>
<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>
</body>
</html>
<br>


//EnterBooks.php
<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Simple Library Management System</h2></center>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
<form action="InsertBooks.php" method="post">

<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter ISBN :</td>
<td> <input type="text" name="isbn" size="48"> </td>
</tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>


