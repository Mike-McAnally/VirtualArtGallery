<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>DB Insert Discount</title>
  </head>
<body>

<?php
$servername = "localhost";
$username = "your_username_here";
$password = "your_password_here";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Insert Discount_Amount data
$sql = "INSERT INTO your_database_name.Discount (Discount_Amount) VALUES (0)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
