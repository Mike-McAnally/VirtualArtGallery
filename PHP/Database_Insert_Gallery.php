<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>DB Insert Gallery</title>
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

// Insert Gallery name, directory and positional data
$sql = "INSERT INTO your_database_name.Gallery (Gallery_Name, Dir, File, Pos_X, Pos_Y, Pos_Z, Rot_X, Rot_Y, Rot_Z, Scale_X, Scale_Y, Scale_Z) VALUES ('Virtual Art Gallery', 'https://rocketvirtual.com/gltf/', 'finalVRArtGallery.gltf', -18.826, 0.006, 19.083, 0, 0, 0, 1, 1, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New Gallery record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
