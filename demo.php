<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$regno=$_GET['t1'];
$name=$_GET['t2'];
$mark=$_GET['t3'];
$age=$_GET['t4'];
$phno=$_GET['t5'];
$email=$_GET['t6'];
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
$sql = "create table student (regno INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,  
mark INT NOT NULL,age INT NOT NULL,phno INT NOT NULL,email VARCHAR(20) NOT NULL,primary key (regno))";  
mysqli_select_db($conn,$dbname);
mysqli_query($conn, $sql);
$sql1 = "INSERT INTO student values('$regno','$name','$mark','$age','$phno','$email')";
mysqli_query($conn, $sql1);
mysqli_close($conn);  

echo '<table width="40%" border="0" cellspacing="0" cellpadding="10">
<tr><th colspan="2"><h2>STUDENT DETAILS</h2></th></tr>';
echo "<tr>
<td>Register Number:</td>
<td>$regno</td>
</tr>";
echo "<tr><td>Student Name</td>
<td>$name</td>
</tr>";
echo "<tr><td>Mark</td>
<td>$mark</td>
</tr>";
echo "<tr><td>Age</td>
<td>$age</td>
</tr>";
echo "<tr><td>Phone Number</td>
<td>$phno</td>
</tr>";
echo "<tr><td>Email</td>
<td>$email</td>
</tr>";
echo '<tr><th colspan="2"> </th></tr></table></body></html>';

?>