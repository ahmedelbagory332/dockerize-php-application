<?php  
$servername = "db"; // as name of container in yaml file
$username = "devuser";
$password = "devpass";
$DATABASE_NAME = "test_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$DATABASE_NAME);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
echo "Connected successfully";
echo "<br>";
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}  

$conn->close();
?>  
