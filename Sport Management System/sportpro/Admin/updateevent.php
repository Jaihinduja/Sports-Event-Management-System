<?php
$event_name=$_POST['ename'];
$type=$_POST['type'];
$description=$_POST['description'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$time=$_POST['time'];
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

$sql = "UPDATE event set type='$type',description='$description',start_date='$start_date',end_date='$end_date',time='$time' where event_name='$event_name'";

if ($conn->query($sql) === TRUE) {
	
echo '<script type="text/javascript">'; 
echo 'alert("Event Updated Sucessfully");'; 
echo 'window.location.href = "Edit Events.php";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>