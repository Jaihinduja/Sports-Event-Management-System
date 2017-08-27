<?php
$event_name=$_POST['event'];
$type=$_POST['type'];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">

</head><script>
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
			<li><a href="Results_stud.php">Results</a></li>
			<li><a href="About us.html">About us</a></li>
		
			
		</ul>
	</nav>

<div class="col-12" >
<div style="width:100%;border-style:solid; border-radius:10px;text-align:center;border-color:#0000ff">
 <h2 class="liketext">Registeration Form </h2>

    <form action="register_process.php" method="post">
    <b>Event Name: <input type="text" name="event" id="event" value='<?php echo  $event_name; ?>' readonly class="smalltext"/><br>
      Type: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="type" id="event_type" value='<?php echo $type;?>' readonly class="smalltext"/><br>
	   Full Name: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="name" id="fullname" placeholder="Full Name" required class="smalltext"/><font color="red"><b>* </font><br>
		E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" id="email" placeholder="E-mail" required class="smalltext"/><font color="red"><b>* </font><br>
		Class: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="class" id="event_type" placeholder="Class" required class="smalltext"/><font color="red"><b>* </font><br>
		  Contact:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="number" maxlength="10" name="contact" id="event_type" placeholder="Contact number" required class="smalltext"/><font color="red"><b>* </font><br>
     <input type="submit" value="Submit"/>
	  </b>
  
	</table>
	</div>
</div>
  
 
</div>


</div>

<footer>
  <p>Copyright 2016-2020 by VG corporation. All Rights Reserved.</p>
</footer>

</body>
</html>