<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Curate Art positional data</title>
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

// Insert Curate 1 Art positional data
$sql = "INSERT INTO your_database_name.Curate (Curate_ID, Gallery_ID, Pos_X, Pos_Y, Pos_Z, Rot_X, Rot_Y, Rot_Z, Scale_X, Scale_Y, Scale_Z, Spot_X, Spot_Y, Spot_Z, Spot_Rot_X, Spot_Rot_Y, Spot_Rot_Z, Spot_Scale_X, Spot_Scale_Y, Spot_Scale_Z, Spot_Intensity, Spot_Angle, Desc_X, Desc_Y, Desc_Z, Desc_Rot_X, Desc_Rot_Y, Desc_Rot_Z, Desc_Scale_X, Desc_Scale_Y, Desc_Scale_Z, Buy_X, Buy_Y, Buy_Z, Buy_Rot_X, Buy_Rot_Y, Buy_Rot_Z, Buy_Scale_X, Buy_Scale_Y, Buy_Scale_Z) VALUES (1, 1, -17.3, 1.665, -4.88867, -0.04, 89.71, 0.099, 0.76199959, 0.50799973, 1, -14.90126, 3.897, -5.11556, -52, 95.43, 179.42, 1, 1, 1, 0.04, 45, -17.3, 1.679, -5.402, -0.04, 89.71, 0.099, 0.035, 0.035, 0.035, -17.3, 1.171, -4.88867, 0, 90, 0, 0.27, 0.102, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record Curate 1 Art created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Curate 2 Art positional data
$sql = "INSERT INTO your_database_name.Curate (Curate_ID, Gallery_ID, Pos_X, Pos_Y, Pos_Z, Rot_X, Rot_Y, Rot_Z, Scale_X, Scale_Y, Scale_Z, Spot_X, Spot_Y, Spot_Z, Spot_Rot_X, Spot_Rot_Y, Spot_Rot_Z, Spot_Scale_X, Spot_Scale_Y, Spot_Scale_Z, Spot_Intensity, Spot_Angle, Desc_X, Desc_Y, Desc_Z, Desc_Rot_X, Desc_Rot_Y, Desc_Rot_Z, Desc_Scale_X, Desc_Scale_Y, Desc_Scale_Z, Buy_X, Buy_Y, Buy_Z, Buy_Rot_X, Buy_Rot_Y, Buy_Rot_Z, Buy_Scale_X, Buy_Scale_Y, Buy_Scale_Z) VALUES (2, 1, -17.3, 1.665, 1.55278, -0.04, 89.71, 0.099, 0.76199959, 0.50799973, 1, -14.90126, 3.897, 1.29515, -52.0, 95.43, 179.42, 1, 1, 1, 0.04, 45, -17.299, 1.679, 1.036, -0.04, 89.71, 0.099, 0.035, 0.035, 0.035, -17.29, 1.171, 1.55278, 0, 90, 0, 0.27, 0.102, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record Curate 2 Art created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Curate 3 Art positional data
$sql = "INSERT INTO your_database_name.Curate (Curate_ID, Gallery_ID, Pos_X, Pos_Y, Pos_Z, Rot_X, Rot_Y, Rot_Z, Scale_X, Scale_Y, Scale_Z, Spot_X, Spot_Y, Spot_Z, Spot_Rot_X, Spot_Rot_Y, Spot_Rot_Z, Spot_Scale_X, Spot_Scale_Y, Spot_Scale_Z, Spot_Intensity, Spot_Angle, Desc_X, Desc_Y, Desc_Z, Desc_Rot_X, Desc_Rot_Y, Desc_Rot_Z, Desc_Scale_X, Desc_Scale_Y, Desc_Scale_Z, Buy_X, Buy_Y, Buy_Z, Buy_Rot_X, Buy_Rot_Y, Buy_Rot_Z, Buy_Scale_X, Buy_Scale_Y, Buy_Scale_Z) VALUES (3, 1, -17.3, 1.665, 7.85337, -0.04, 89.71, 0.099, 0.76199959, 0.50799973, 1, -14.90126, 3.897, 7.70153, -52, 95.43, 179.42, 1, 1, 1, 0.04, 45, -17.3, 1.679, 7.314, -0.04, 89.71, 0.099, 0.035, 0.035, 0.035, -17.3, 1.171, 7.85337, 0, 90, 0, 0.27, 0.102, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record Curate 3 Art created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Curate 4 Art positional data
$sql = "INSERT INTO your_database_name.Curate (Curate_ID, Gallery_ID, Pos_X, Pos_Y, Pos_Z, Rot_X, Rot_Y, Rot_Z, Scale_X, Scale_Y, Scale_Z, Spot_X, Spot_Y, Spot_Z, Spot_Rot_X, Spot_Rot_Y, Spot_Rot_Z, Spot_Scale_X, Spot_Scale_Y, Spot_Scale_Z, Spot_Intensity, Spot_Angle, Desc_X, Desc_Y, Desc_Z, Desc_Rot_X, Desc_Rot_Y, Desc_Rot_Z, Desc_Scale_X, Desc_Scale_Y, Desc_Scale_Z, Buy_X, Buy_Y, Buy_Z, Buy_Rot_X, Buy_Rot_Y, Buy_Rot_Z, Buy_Scale_X, Buy_Scale_Y, Buy_Scale_Z) VALUES (4, 1, -17.3, 1.665, 13.78845, -0.04, 89.71, 0.099, 0.76199959, 0.50799973, 1, -14.90126, 3.897, 13.62382, -52, 95.43, 179.42, 1, 1, 1, 0.04, 45, -17.3, 1.679, 13.288, -0.04, 89.71, 0.099, 0.035, 0.035, 0.035, -17.3, 1.171, 13.78845, 0, 90, 0, 0.27, 0.102, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record Curate 4 Art created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Curate 5 Art positional data
$sql = "INSERT INTO your_database_name.Curate (Curate_ID, Gallery_ID, Pos_X, Pos_Y, Pos_Z, Rot_X, Rot_Y, Rot_Z, Scale_X, Scale_Y, Scale_Z, Spot_X, Spot_Y, Spot_Z, Spot_Rot_X, Spot_Rot_Y, Spot_Rot_Z, Spot_Scale_X, Spot_Scale_Y, Spot_Scale_Z, Spot_Intensity, Spot_Angle, Desc_X, Desc_Y, Desc_Z, Desc_Rot_X, Desc_Rot_Y, Desc_Rot_Z, Desc_Scale_X, Desc_Scale_Y, Desc_Scale_Z, Buy_X, Buy_Y, Buy_Z, Buy_Rot_X, Buy_Rot_Y, Buy_Rot_Z, Buy_Scale_X, Buy_Scale_Y, Buy_Scale_Z) VALUES (5, 1, -8.91759, 1.665, 17.87, -0.04, -180.0, 0.099, 0.76199959, 0.50799973, 1, -9.00054, 3.433, 16.87552, -128, 0.991, -0.579, 1, 1, 1, 0.1, 45, -9.446, 1.679, 17.87, -0.04, -180, 0.099, 0.035, 0.035, 0.035, -8.91759, 1.171, 17.87, -0.04, -180, 0.099, 0.27, 0.102, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record Curate 5 Art created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Curate 6 Art positional data
$sql = "INSERT INTO your_database_name.Curate (Curate_ID, Gallery_ID, Pos_X, Pos_Y, Pos_Z, Rot_X, Rot_Y, Rot_Z, Scale_X, Scale_Y, Scale_Z, Spot_X, Spot_Y, Spot_Z, Spot_Rot_X, Spot_Rot_Y, Spot_Rot_Z, Spot_Scale_X, Spot_Scale_Y, Spot_Scale_Z, Spot_Intensity, Spot_Angle, Desc_X, Desc_Y, Desc_Z, Desc_Rot_X, Desc_Rot_Y, Desc_Rot_Z, Desc_Scale_X, Desc_Scale_Y, Desc_Scale_Z, Buy_X, Buy_Y, Buy_Z, Buy_Rot_X, Buy_Rot_Y, Buy_Rot_Z, Buy_Scale_X, Buy_Scale_Y, Buy_Scale_Z) VALUES (6, 1, -4.34374, 1.665, 17.95, -0.04, -180.0, 0.099, 0.76199959, 0.50799973, 1, -4.42554, 3.433, 16.87552, -128, 0.991, -0.579, 1, 1, 1, 0.1, 45, -4.832, 1.679, 17.95, -0.04, -180, 0.099, 0.035, 0.035, 0.035, -4.34374, 1.171, 17.95, -0.04, -180, 0.099, 0.27, 0.102, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record Curate 6 Art created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Curate 7 Art positional data
$sql = "INSERT INTO your_database_name.Curate (Curate_ID, Gallery_ID, Pos_X, Pos_Y, Pos_Z, Rot_X, Rot_Y, Rot_Z, Scale_X, Scale_Y, Scale_Z, Spot_X, Spot_Y, Spot_Z, Spot_Rot_X, Spot_Rot_Y, Spot_Rot_Z, Spot_Scale_X, Spot_Scale_Y, Spot_Scale_Z, Spot_Intensity, Spot_Angle, Desc_X, Desc_Y, Desc_Z, Desc_Rot_X, Desc_Rot_Y, Desc_Rot_Z, Desc_Scale_X, Desc_Scale_Y, Desc_Scale_Z, Buy_X, Buy_Y, Buy_Z, Buy_Rot_X, Buy_Rot_Y, Buy_Rot_Z, Buy_Scale_X, Buy_Scale_Y, Buy_Scale_Z) VALUES (7, 1, -0.007, 1.665, 18.0, -0.04, -180.0, 0.099, 0.76199959, 0.50799973, 1, 0.06168, 3.433, 16.87552, -128, 0.991, -0.579, 1, 1, 1, 0.1, 45, -0.527, 1.679, 18, -0.04, -180, 0.099, 0.035, 0.035, 0.035, -0.007, 1.171, 18, -0.04, -180, 0.099, 0.27, 0.102, 1)";

if ($conn->query($sql) === TRUE) {
    echo "New record Curate 7 Art created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

</body>
</html>
