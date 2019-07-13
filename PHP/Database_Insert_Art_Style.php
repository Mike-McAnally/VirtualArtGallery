<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert all Art_Style data</title>
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


$styles = array("Abstract",
"Abstract Expressionism",
"Art Noveau",
"Art Deco",
"Avant-garde",
"Baroque",
"Classicism",
"Conceptual Art",
"Constructivism",
"Contemporary Art",
"Cubism",
"Dada (Dadaism)",
"Expressionism",
"Fauvism",
"Futurism",
"Impressionism",
"Installation Art",
"Land Art (Earth Art)",
"Minimalism",
"Modern Art",
"Neo-Impressionalism",
"Neo-Classicism",
"Painterly",
"Photorealism",
"Pointillism",
"Pop Art",
"Post-Impressionism",
"Realism (Naturalism)",
"Rococo",
"Surrealism",
"Suprematism"); 


foreach ($styles as $val) {

	// Insert all Art_Style data from javascript array, load the table
	$sql = "INSERT INTO your_database_name.Art_Style (Art_Style) VALUES ('" .$val. "')";

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
