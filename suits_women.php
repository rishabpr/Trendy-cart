<?php
include('navbar.php')
?>
<html>
<head>
<link rel="stylesheet" href="suits.css">

<title>
Home Page
</title>
</head>

<body>




<?php
require  'connection.php';
$sql="SELECT * FROM suits_women";
$result = mysqli_query($conn,$sql);
$i=0;

	echo "<table cellspacing=\"30px\">";
 while ($row=mysqli_fetch_row($result))
    {
	if($i==0)
	{
	echo "<tr>";
	}
	echo "<td>";
	echo "<div class=\"shoes\">";
	echo "<img src=$row[6] height=\"310px\" width=\"250px\">";
	echo "<center><b>";
	echo $row[1]."<br>";
	echo "Rs.".$row[5];
	echo "</b></center>";
	echo "</div>";
	echo "</td>";
	$i=$i+1;
if($i==3)
{
	echo "</tr>";
	$i=0;
}	
	   }
echo "</table>";
		
$conn->close();

?>
   




</body>
</html>