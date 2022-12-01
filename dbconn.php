<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "contacts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql ="SELECT * FROM `contact us`";
$result = mysqli_query($conn, $sql);
$num_rows= mysqli_num_rows($result);
echo $num_rows; 
echo "<br>";

if($num_rows>0){
  $row= mysqli_fetch_assoc($result);
  echo var_dump($row);
  echo "<br>";

while($row= mysqli_fetch_assoc($result)){
  $row= mysqli_fetch_assoc($result);
  echo $row['name'] . $row['email'] . $row['concern'] . $row['dt'];
}

}
?>