<?php
include('navbar.php')
?>
<html>
<head>
<link rel="stylesheet" href="women_suits.css">

<title>
Home Page
</title>
</head>

<body>

<div id="head1">
<a id="heading" href="women_home.php">WOMEN</a>
</div>


<?php
require  'connection.php';
$sql="SELECT * FROM upper_women";
$result = mysqli_query($conn,$sql);
$i=0;

	echo "<table cellspacing=\"20px\">";
 while ($row=mysqli_fetch_row($result))
    {
	if($i==0)
	{
	echo "<tr>";
	}
	echo "<td>";
	echo "<div class=\"shoes\">";
	echo "<a href=\"detail.php?id=$row[0]&table=women\"><img src=images\\$row[6] height=\"310px\" width=\"250px\"></a>";
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