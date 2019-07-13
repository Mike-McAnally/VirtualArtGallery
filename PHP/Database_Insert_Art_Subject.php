<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert all Art_Subject data</title>
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


$types = array("Abstract",
"Animals",
"Architecture",
"Art For Kids",
"Astronomy & Space",
"Beach",
"Book Illustration",
"Botanical",
"Busy Street",
"Cats",
"Celebrations",
"City Block",
"Comics",
"Costumes",
"Daily life",
"Dance",
"Dinner Gathering",
"Dogs",
"Domestic Settings",
"Education",
"Fantasy",
"Fashion",
"Figurative",
"Flowers",
"Food",
"Group-portraits",
"Hobbies",
"Horses",
"Holidays",
"Home & Hearth",
"Humor",
"Interiors",
"Markets",
"Maps",
"Motivational",
"Movies",
"Museums",
"Music",
"Nudes",
"Outdoor Cafe",
"Pet-portraits",
"People",
"Places",
"Publications",
"Religion & Spirituality",
"Rooftops",
"Scenic",
"Seascape",
"Seasons",
"Self-portrait",
"Ship-portraits",
"Sports",
"Street Corner",
"Street Situations",
"Still Life",
"Tavern scenes (Bar)",
"Television",
"Townscapes",
"Transportation",
"Typography & Symbols",
"World Culture"); 


foreach ($types as $val) {

	// Insert all Art_Subject data from javascript array, load the table
	$sql = "INSERT INTO your_database_name.Art_Subject (Art_Subject) VALUES ('" .$val. "')";

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
