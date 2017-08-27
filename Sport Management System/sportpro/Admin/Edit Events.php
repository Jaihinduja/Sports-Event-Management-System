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
<h1 class="liketext">SportPro
<a href ="index.html"> <input type="button" value="Logout" style="float:right;"></a></h1>
</header>

<div class="row">
<nav>
		<div class="menu-icon">
			
		</div>
		<ul>
			<li><a href="Add Events.html">Add Events</a></li>
			<li><a href="#" style="color:red;">Edit Events</a></li>
			<li><a href="Reports.php">Reports</a></li>
			<li><a href="Results.php" >Results</a></li>
		
			
		</ul>
	</nav>
               
<div class="col-12">
<div style="padding-left:2%;width:100%;border-style:solid; border-radius:10px;border-color:#0000ff">
 <center> <h1>Edit Events</h1></center>                          

 <form action="updateevent.php" method="post">
Event name:
<?php
$sql = "SELECT * FROM event";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
  echo '<select name="ename" class="smalltext">';
    while($row = $result->fetch_assoc()) {
		
        echo '<option value="'.$row["event_name"].'">'.$row["event_name"].'</option>';
    }
} else {
    echo "0 results";
}

?>



</select>
Type:<select name="type" required class="smalltext">
  <option value="indoor">Indoor</option>
  <option value="outoor">Outdoor</option>

</select><br><br>

Description:                                                                      
<input type="text" name="description" required class="bigtext"><br><br>

  Start Date:  
<input type="date" name="start_date" required class="smalltext">

  End Date:  
<input type="date" name="end_date" required class="smalltext"><br><br>

Event Time:  
<input type="time" name="time" required class="smalltext"><br>
<center><input type="submit" value="Submit"></center>
</form>
  
</div>
<center>
<img src="https://t4.ftcdn.net/jpg/01/08/89/47/240_F_108894716_XTAQTSuU1B1kmM7w9CqL0wEJI7TjAOXY.jpg" width="40%;">

</div>


</div>

<footer>
  <p>Copyright 2016-2020 by VG corporation. All Rights Reserved.</p>
</footer>

</body>
</html>';