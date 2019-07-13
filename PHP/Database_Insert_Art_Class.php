<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert all Art_Class data</title>
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


$types = array("Abstract art", 
"Algorithmic art",
"Cartoons",
"Child art",
"Cityscapes",
"Digital art",
"Environmental art",
"Figure drawing",
"Folk art",
"Graffiti art",
"History painting",
"Interactive art",
"Internet art",
"Landscape painting",
"Line art",
"Marine art (Maritime art)",
"Mosaic art",
"Naive art",
"Performing Arts",
"Photography art",
"Portrait painting",
"Radio art",
"Religious art (Sacred art)",
"Site-specific art",
"Space art (Astronomical art)",
"Street art",
"Still Life",
"Tapestry art",
"Urban Landscapes",
"Vanitas",
"Virtual art",
"Wildlife art"); 


foreach ($types as $val) {

	// Insert all Art_Class data from javascript array, load the table
	$sql = "INSERT INTO your_database_name.Art_Class (Art_Class) VALUES ('" .$val. "')";

	if ($conn->query($sql) === TRUE) {
		echo "New record '" .$val. "' created successfully<br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}

$conn->close();
?>

</body>
</html>
