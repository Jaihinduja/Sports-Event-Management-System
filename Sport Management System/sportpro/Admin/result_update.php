<?php
$event_name=$_POST['ename'];
$first=$_POST['1st'];
$second=$_POST['2nd'];
$third=$_POST['3rd'];
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
$sql = "UPDATE event set status='end' where event_name='$event_name'";
$conn->query($sql);
$sql = "select class from entry where username='$first'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) {
	$fclass=$row["class"]; 

  }
$sql = "select class from entry where username='$second'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) {
	$sclass=$row["class"]; 

  }
$sql = "select class from entry where username='$third'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) {
	$tclass=$row["class"]; 

  }

$sql = "INSERT INTO result1(eventname,win1,w1class,win2,w2class,win3,w3class)
VALUES ('$event_name','$first','$fclass','$second','$sclass','$third','$tclass')";

if ($conn->query($sql) === TRUE) {
	
 //$message = "Event Added Successfully";
 // echo "<script type='text/javascript'>alert('$message');</script>";
  //header('Location: Add Events.html'); 

echo '<script type="text/javascript">'; 
echo 'alert("Result Saved");'; 
echo 'window.location.href = "Results.php";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>