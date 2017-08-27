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
			<li><a href="#" style="color:red;">Events</a></li>
			<li><a href="Results_stud.php">Results</a></li>
			<li><a href="About us.html">About us</a></li>
		
			
		</ul>
	</nav>
<div class="col-12">
<center>
  <h1>Events</h1>                          

<?php
$servername = "localhost";
$username = 'id1298591_sportpro';
$password = '11111';
$dbname = "id1298591_sportpro";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
// Check connection
$sql = "SELECT * FROM event where status='ongoing' ORDER BY end_date asc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<div style="align:center; box-shadow: 10px 10px 5px #888888; padding-left:10px;border:1px; border-radius:5px;background-color:#d6e4f9"><form action="register.php" method="post">';
        echo "<br><b>Event Name: </b>" . $row["event_name"]."<br> <b>Type: </b>" . $row["type"]. "<br> <b>Description:</b> " . $row["description"]."<br><b> Registration Last Date: </b>" . $row["end_date"]."<br><b> Timing:</b> " . $row["time"];
		echo '<input type="hidden" name="event" value='.$row["event_name"].'><input type="hidden" name="type" value='.$row["type"].'>';
		echo '<br><input type="submit" value="register"><br><br></form></div><br><br>';  

  }
} else {
    echo "0 results";
}
$conn->close();
?>
  


</div>
</div>

<footer>
  <p>Copyright 2016-2020 by VG corporation. All Rights Reserved.</p>
</footer>

</body>
</html>