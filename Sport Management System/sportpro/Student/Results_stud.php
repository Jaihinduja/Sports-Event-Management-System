<?php
$servername = "localhost";
$username = 'id1298591_sportpro';
$password = '11111';
$dbname = "id1298591_sportpro";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
// Check connection
$sql = "SELECT * FROM result1";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-97824898-1', 'auto');
ga('send', 'pageview');
</script>

</head>
<body>

<header>
<img src="http://vectorlogofree.com/wp-content/uploads/2013/01/canadian-olympic-team-logo-vector-400x400.png" width="100px" height="80px">
<h1 class="liketext">SportPro</h1>
</header>

<div class="row">

<nav>
		<div class="menu-icon">
			
		</div>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="Events.php">Events</a></li>
			<li><a href="#" style="color:red;">Results</a></li>
			<li><a href="About us.html">About us</a></li>
		
			
		</ul>
	</nav>
<div class="col-12">
  <h1>Results</h1>                          
<table>
<table>
<tr>
<th>Event Name </th>
<th>Winner</th>
<th>Runner Up</th>
<th>2nd Runner Up</th>
</tr>
<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>';
        echo "<td>" . $row["eventname"]."</td><td>" . $row["win1"]. " (".$row["w1class"].")</td><td>" . $row["win2"]. " (".$row["w2class"].")</td><td>" . $row["win3"]. " (".$row["w3class"].")</td>";
echo '</tr>';  

  }
} else {
    echo "0 results";
}
$conn->close();
?>
  
  </table>
  
  </table>
  <center>
  <img src="https://t4.ftcdn.net/jpg/01/08/89/47/240_F_108894716_XTAQTSuU1B1kmM7w9CqL0wEJI7TjAOXY.jpg" width="40%;">

</div>
</div>
<footer>
  <p>Copyright 2016-2020 by VG corporation. All Rights Reserved.</p>
</footer>

</body>
</html>