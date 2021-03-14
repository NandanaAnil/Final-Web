<!DOCTYPE html>
<html>
<body>
<?php
$players = array("Sachin", "Dhoni", "Kohli","Jadeja", "Rohit Sharma", "Raina","Dravid", "Munaf", "Sehwag","Zaheer"); 
echo "<table border='1'>";
echo "<tr><th>NAME OF INDIAN CRICKET PLAYERS</th></tr>";
for($i=0;$i<count($players);$i++)
{
 echo "<tr><td>".$players[$i]."</td></tr>";
}
echo "</table>";
?>
</body>
</html>


