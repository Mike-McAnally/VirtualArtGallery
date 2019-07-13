<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>DB Insert E-commerce System</title>
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

// Insert Ecommerce_System data
$sql = "INSERT INTO your_database_name.Ecommerce_System (Ecommerce_System_Name) VALUES ('PayPal Shopping Cart')";

if ($conn->query($sql) === TRUE) {
    echo "New record 'PayPal Shopping Cart' created successfully.<BR>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
