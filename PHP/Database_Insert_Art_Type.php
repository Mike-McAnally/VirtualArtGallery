<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert all Art_Type data</title>
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


$types = array("3D Printing",
"3D Works",
"Acrylics",
"Assemblage",
"Bronze",
"Calligraphy",
"Canvas Painting",
"Ceramics",
"Clay",
"Collage",
"Computer Animation",
"Computer Graphics",
"Computer Robotics",
"Embellished Ornaments",
"Encaustic Paints",
"Engraving",
"Etching",
"Film",
"Foil Imaging",
"Furnishings",
"Furniture",
"Giclee Prints",
"Glass",
"Ink",
"Ink and Wash",
"Jewelry",
"Lithography",
"Marble",
"Metal",
"New media",
"Oils",
"Painting",
"Paper (Origami)",
"Plaster",
"Photography",
"Printmaking",
"Screen-printing",
"Sculpture",
"Stained glass",
"Stencils",
"Stone",
"Tapestry",
"Tempera",
"Textile Fabric",
"Tile",
"Video",
"Watercolor",
"Wood",
"Woodcuts"); 


foreach ($types as $val) {

	// Insert all Art_Type data from javascript array, load the table
	$sql = "INSERT INTO your_database_name.Art_Type (Art_Type) VALUES ('" .$val. "')";

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
