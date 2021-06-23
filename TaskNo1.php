<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taskno1";


$motor1=$_POST['motor1'];
$motor2=$_POST['motor2'];;
$motor3 =$_POST['motor3'];
$motor4 =$_POST['motor4'];
$motor5 =$_POST['motor5'];
$motor6 =$_POST['motor6'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO motors (id,Engine_no_1,Engine_no_2,Engine_no_3,Engine_no_4,Engine_no_5,
Engine_no_6 ,run_button, stop_button) VALUES('',$motor1 ,$motor2,$motor3,$motor4,$motor5,$motor6,'','')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully <br>";
 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>