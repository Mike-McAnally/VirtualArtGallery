<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>DB Insert Artist Type</title>
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

// Insert Artist_Type data
$sql = "INSERT INTO your_database_name.Artist_Type (Artist_Type) VALUES ('Painter')";

if ($conn->query($sql) === TRUE) {
    echo "New record Painter created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Artist_Type data
$sql = "INSERT INTO your_database_name.Artist_Type (Artist_Type) VALUES ('Photographer')";

if ($conn->query($sql) === TRUE) {
    echo "New record Photographer created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Artist_Type data
$sql = "INSERT INTO your_database_name.Artist_Type (Artist_Type) VALUES ('Sculptor')";

if ($conn->query($sql) === TRUE) {
    echo "New record Sculptor created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

</body>
</html>
