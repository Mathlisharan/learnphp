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

$uname=$_POST['username'];
$pass=$_POST['password'];
$Gender=$_POST['gender'];

$sql="INSERT INTO form (`username`,`password`,`gender`)
VALUES('$uname','$pass','$Gender')";

if (mysqli_query($conn, $sql)) {
  echo "New record added successfully<br><br>";
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "SELECT * FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Username:- " . $row["username"]."<br>"." Gender:- " . $row["gender"]."<br><br><br>";
    
  }
} else {
  echo "0 results";
}


mysqli_close($conn);
?>