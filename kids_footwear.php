<?php
include('navbar.php')
?>
<html>
<head>
<link rel="stylesheet" href="footwear.css">

<title>
Home Page
</title>
</head>

<body>



<a href="men_footwear.php"><button id="men_shoe">Men</button></a>
<a href="women_footwear.php"><button id="women_shoe" >Women</button></a>
<a href="kids_footwear.php?gen=boys"><button id="kids_shoe" >Kids</button></a>
<a href="kids_footwear.php?gen=boys"><button  >boys</button></a>
<a href="kids_footwear.php?gen=girls"><button  >girls</button></a>

<?php
require  'connection.php'; 
$gen=$_GET['gen'];
$sql="SELECT * FROM kids_shoes where gender='".$gen."'";
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
	echo "<img src=images\\$row[6] height=\"310px\" width=\"250px\">";
	echo $row[1]."<br>";
	echo "Rs.".$row[5];
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