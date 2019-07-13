<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>DB Drop All Tables</title>
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
echo "Virtual Art Gallery Database Connected Successfully!<br>";



// DROP TABLE Art_Sold
$sql = "DROP TABLE your_database_name.Art_Sold";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Sold successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// DROP TABLE Artwork;
$sql = "DROP TABLE your_database_name.Artwork";

if ($conn->query($sql) === TRUE) {
    echo "Table Artwork successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// DROP TABLE Curate;
$sql = "DROP TABLE your_database_name.Curate";

if ($conn->query($sql) === TRUE) {
    echo "Table Curate successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// DROP TABLE Artist;
$sql = "DROP TABLE your_database_name.Artist";

if ($conn->query($sql) === TRUE) {
    echo "Table Artist successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// DROP TABLE Ecommerce_System;
$sql = "DROP TABLE your_database_name.Ecommerce_System";

if ($conn->query($sql) === TRUE) {
    echo "Table Ecommerce_System successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// DROP TABLE Discount;
$sql = "DROP TABLE your_database_name.Discount";

if ($conn->query($sql) === TRUE) {
    echo "Table Discount successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// DROP TABLE Artist_Type;
$sql = "DROP TABLE your_database_name.Artist_Type";

if ($conn->query($sql) === TRUE) {
    echo "Table Artist_Type successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}



// DROP TABLE Art_Subject;
$sql = "DROP TABLE your_database_name.Art_Subject";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Subject successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}



// DROP TABLE Art_Class;
$sql = "DROP TABLE your_database_name.Art_Class";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Class successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}



// DROP TABLE Art_Style;
$sql = "DROP TABLE your_database_name.Art_Style";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Style successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}



// DROP TABLE Art_Type;
$sql = "DROP TABLE your_database_name.Art_Type";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Type successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// DROP TABLE Gallery;
$sql = "DROP TABLE your_database_name.Gallery";

if ($conn->query($sql) === TRUE) {
    echo "Table Gallery successfully dropped.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


$conn->close();
?>
</body>
</html>
