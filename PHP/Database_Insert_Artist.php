<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>DB Insert Artist</title>
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


// Select Artist_Type Photographer
$sql = "SELECT Artist_Type_ID FROM your_database_name.Artist_Type WHERE Artist_Type = 'Photographer'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Artist_Type_ID: " .$row["Artist_Type_ID"]. "<br>";
        $id2 = $row["Artist_Type_ID"];
    }
} else {
    echo "0 results";
}


// Insert Artist data, including ID for Artist Type
$sql = "INSERT INTO your_database_name.Artist (Artist_Type_ID, First, Middle, Last, Known_As, Birth_Date, Death_Date, Bio, Pic_Dir, Pic_File, Email)

 VALUES ( '" .$id2. "', 'Michael', 'Walton', 'McAnally', 'Michael McAnally', '1961-03-19', '0000-00-00', 'A Coder, Futurist and Science Fiction Blogger. He is a canvas painter and photographer who created this Virtual Art Gallery to help other artists sell there works in a new and innovative way.', 'https://rocketvirtual.com/images/', 'avatar.png', 'mwmcanally@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record 'Michael McAnally', 'Photographer' created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
?>

</body>
</html>
