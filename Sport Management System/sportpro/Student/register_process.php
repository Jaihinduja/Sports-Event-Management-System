<?php
$event_name=$_POST['event'];
$type=$_POST['type'];
$name=$_POST['name'];
$email=$_POST['email'];
$class=$_POST['class'];
$contact=$_POST['contact'];
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
$sql = "select * from entry where event='$event_name' and email='$email'";
$result =$conn->query($sql);
$num_rows = mysqli_num_rows($result);
if($num_rows!=1)
{
$sql = "INSERT INTO entry(event,type,username,email,class,contact)
VALUES ('$event_name','$type','$name','$email','$class','$contact')";
$subject = "Registration Conformation";
$message = "Hello  '$name' you are sucessfully registred for event '$event_name' Best wishes from Sportpro Team";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sportpro.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($email,$subject,$message,$headers);

if ($conn->query($sql) === TRUE) {
	
 //$message = "Event Added Successfully";
 // echo "<script type='text/javascript'>alert('$message');</script>";
  //header('Location: Add Events.html'); 

echo '<script type="text/javascript">'; 
echo 'alert("Registered Sucessfully!!!!!!!!!!");'; 
echo 'window.location.href = "Events.php";';
echo '</script>';  
}


 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


else
{
	echo '<script type="text/javascript">'; 
echo 'alert("Already Registered!!!!!!!!!!");'; 
echo 'window.location.href = "Events.php";';
echo '</script>';  
}
$conn->close();
?>