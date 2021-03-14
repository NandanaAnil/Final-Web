<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$ISBN=$_GET['isbn'];
$Title=$_GET['title'];
$Author=$_GET['author'];
$Edition=$_GET['edition'];
$Publication=$_GET['publication'];
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
$sql = "create table book_info (ISBN INT AUTO_INCREMENT,Title VARCHAR(20) NOT NULL,  
Author VARCHAR(30) NOT NULL,Edition INT NOT NULL,Publication VARCHAR(20) NOT NULL,primary key (ISBN))";  
mysqli_select_db($conn,$dbname);
mysqli_query($conn, $sql);
$sql1 = "INSERT INTO student values('$ISBN','$Title','$Author','$Edition''$Publication')";
mysqli_query($conn, $sql1);
mysqli_close($conn);  

?>