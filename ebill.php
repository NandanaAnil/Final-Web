<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$consumer_number = $_GET["consumer_number"];
$consumer_name = $_GET["consumer_name"];
$previous_reading = $_GET["previous_reading"];
$present_reading = $_GET["present_reading"];
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
$sql = "create table electricitybill (consumer_number INT AUTO_INCREMENT,consumer_name VARCHAR(20) NOT NULL,  
previous_reading INT NOT NULL,present_reading INT NOT NULL,primary key (consumer_number))";  
mysqli_select_db($conn,$dbname);
mysqli_query($conn, $sql);
$sql1 = "INSERT INTO electricitybill values('$consumer_number','$consumer_name','$previous_reading','$present_reading')";
mysqli_query($conn, $sql1);
mysqli_close($conn);  
$unit = $present_reading - $previous_reading;
if ($unit < 100) {
 $amt = $unit * 3;
} else if (100 <= $unit && $unit <= 200) {
 $amt = $unit * 4;
} else if (200 <= $unit && $unit <= 300) {
 $amt = $unit * 5;
} else {
 $amt = $unit * 6;
}
echo '<table width="40%" border="0" cellspacing="0" cellpadding="10">
<tr><th colspan="2"><h2>ELECTRICITY BILL</h2></th></tr>';
echo "<tr>
<td>Consumer Number</td>
<td>$consumer_number</td>
</tr>";
echo "<tr><td>Customer Name</td>
<td>$consumer_name</td>
</tr>";
echo "<tr><td>Previous Reading</td>
<td>$previous_reading</td>
</tr>";
echo "<tr><td>Present Reading</td>
<td>$present_reading</td>
</tr>";
echo "<tr><td>Unit consumed</td>
<td>$unit</td>
</tr>";
echo "<tr><td>Amount</td>
<td>$amt</td>
</tr>";
echo '<tr><th colspan="2"> </th></tr></table></body></html>';


?>