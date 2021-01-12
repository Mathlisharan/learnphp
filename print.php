
<?php require 'profile.php'?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbname";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
   echo "connected<br><br>";
}

$sql = "SELECT * FROM form";
$result = $conn->query($sql);

if ($result->num_rows> 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]." Name: " . $row["username"]."Gender:-" . $row["gender"]. "<br>";
  }
} else {
  echo "0 results";
}
?>