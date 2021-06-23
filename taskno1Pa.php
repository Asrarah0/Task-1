<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taskno1";

// Create connection
$conn= mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$sql1 = "SELECT ID,Engine_no_1,Engine_no_2,Engine_no_3,Engine_no_4,Engine_no_5,Engine_no_6 FROM motors ";
$query = mysqli_query($conn,$sql1);
while($fetch = mysqli_fetch_assoc($query))
  {
    echo "ID: ".$fetch['ID'] ."<br>";
    echo "Motor #1: ".$fetch['Engine_no_1'] ."<br>";
    echo "Motor #2: ".$fetch['Engine_no_2'] ."<br>";
    echo "Motor #3: ".$fetch['Engine_no_3'] ."<br>";
    echo "Motor #4: ".$fetch['Engine_no_4'] ."<br>";
    echo "Motor #5: ".$fetch['Engine_no_5'] ."<br>";
    echo "Motor #6: ".$fetch['Engine_no_6'] ."<br>";
    echo "<br>";
    }

mysqli_close($conn);
?>