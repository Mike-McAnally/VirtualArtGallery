<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Artwork for Artist</title>
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

// Select Artist_ID
$sql = "SELECT Artist_ID FROM your_database_name.Artist WHERE Known_As = 'Michael McAnally' AND Birth_Date = '1961-03-19'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Artist_ID: " .$row["Artist_ID"]. "<br>";
        $id0 = $row["Artist_ID"];
    }
} else {
    echo "0 results, No Artist by that name.<br>";
}


/*

// Select Artist_ID
$sql = "SELECT Artist_ID FROM your_database_name.Artist WHERE Known_As = 'Michael McAnally' AND Birth_Date = '1961-03-19' AND Artist_Type_ID = '2'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Artist_ID: " .$row["Artist_ID"]. "<br>";
        $id1 = $row["Artist_ID"];
    }
} else {
    echo "0 results, No Artist by that name.<br>";
}

*/


// Select Gallery_ID
$sql = "SELECT Gallery_ID FROM your_database_name.Gallery WHERE Gallery_Name = 'Virtual Art Gallery'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Gallery_ID: " .$row["Gallery_ID"]. "<br>";
        $id2 = $row["Gallery_ID"];
    }
} else {
    echo "0 results";
}



// Select Art_Type_ID
$sql = "SELECT Art_Type_ID FROM your_database_name.Art_Type WHERE Art_Type = 'Photography'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Type_ID: " .$row["Art_Type_ID"]. "<br>";
        $id3 = $row["Art_Type_ID"];
    }
} else {
    echo "0 results";
}

/*

// Select Art_Type_ID
$sql = "SELECT Art_Type_ID FROM your_database_name.Art_Type WHERE Art_Type = 'Painting'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Type_ID: " .$row["Art_Type_ID"]. "<br>";
        $id4 = $row["Art_Type_ID"];
    }
} else {
    echo "0 results";
}

*/


// Select Art_Style
$sql = "SELECT Art_Style_ID FROM your_database_name.Art_Style WHERE Art_Style = 'Contemporary Art'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Style_ID: " .$row["Art_Style_ID"]. "<br>";
        $id5 = $row["Art_Style_ID"];
    }
} else {
    echo "0 results";
}


/*

// Select Art_Style
$sql = "SELECT Art_Style_ID FROM your_database_name.Art_Style WHERE Art_Style = 'Abstract Expressionism'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Style_ID: " .$row["Art_Style_ID"]. "<br>";
        $id6 = $row["Art_Style_ID"];
    }
} else {
    echo "0 results";
}

*/


// Select Art_Class_ID
$sql = "SELECT Art_Class_ID FROM your_database_name.Art_Class WHERE Art_Class = 'Photography art'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Class_ID: " .$row["Art_Class_ID"]. "<br>";
        $id7 = $row["Art_Class_ID"];
    }
} else {
    echo "0 results";
}


/*

// Select Art_Class_ID
$sql = "SELECT Art_Class_ID FROM your_database_name.Art_Class WHERE Art_Class = 'Abstract art'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Class_ID: " .$row["Art_Class_ID"]. "<br>";
        $id8 = $row["Art_Class_ID"];
    }
} else {
    echo "0 results";
}


*/


// Select Art_Subject_ID
$sql = "SELECT Art_Subject_ID FROM your_database_name.Art_Subject WHERE Art_Subject = 'Flowers'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Subject_ID: " .$row["Art_Subject_ID"]. "<br>";
        $id9 = $row["Art_Subject_ID"];
    }
} else {
    echo "0 results";
}


/*


// Select Art_Subject_ID
$sql = "SELECT Art_Subject_ID FROM your_database_name.Art_Subject WHERE Art_Subject = 'Abstract'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Subject_ID: " .$row["Art_Subject_ID"]. "<br>";
        $id10 = $row["Art_Subject_ID"];
    }
} else {
    echo "0 results";
}


*/


// Select Art_Subject_ID
$sql = "SELECT Art_Subject_ID FROM your_database_name.Art_Subject WHERE Art_Subject = 'Scenic'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Subject_ID: " .$row["Art_Subject_ID"]. "<br>";
        $id11 = $row["Art_Subject_ID"];
    }
} else {
    echo "0 results";
}



// Select Art_Subject_ID
$sql = "SELECT Art_Subject_ID FROM your_database_name.Art_Subject WHERE Art_Subject = 'Beach'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Subject_ID: " .$row["Art_Subject_ID"]. "<br>";
        $id12 = $row["Art_Subject_ID"];
    }
} else {
    echo "0 results";
}



// Select Art_Subject_ID
$sql = "SELECT Art_Subject_ID FROM your_database_name.Art_Subject WHERE Art_Subject = 'Daily life'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Subject_ID: " .$row["Art_Subject_ID"]. "<br>";
        $id13 = $row["Art_Subject_ID"];
    }
} else {
    echo "0 results";
}


// Select Art_Subject_ID
$sql = "SELECT Art_Subject_ID FROM your_database_name.Art_Subject WHERE Art_Subject = 'Architecture'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Art_Subject_ID: " .$row["Art_Subject_ID"]. "<br>";
        $id14 = $row["Art_Subject_ID"];
    }
} else {
    echo "0 results";
}




// Insert Artwork 1 data, including ID for Artist
$sql = "INSERT INTO your_database_name.Artwork (Artwork_ID, Artist_ID, Gallery_ID, Curate_ID, Art_Type_ID, Art_Style_ID, Art_Class_ID, Art_Subject_ID, Dir, File, Title, Description, Artwork_Notes, Materials_Process_Used, Date_Created, Size_X, Size_Y, Size_Z, Framed_Flag, Unique_Flag, For_Sale_Flag, Sold_Flag, Price) VALUES ('1', '" .$id0. "', '" .$id2. "', '1', '" .$id3. "', '" .$id5. "', '" .$id7. "', '" .$id9. "', 'https://rocketvirtual.com/artwork/', 'DSC_0137.jpg', 'Lotus Flower', 'A lotus flower.', 'No notes.', 'No art materials or process.', '2018-11-01', '20', '16', '1', false, false, true, false, '125')";

if ($conn->query($sql) === TRUE) {
    echo "New record 'DSC_0137.jpg' created successfully.<BR>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



// Insert Artwork 2 data, including ID for Artist
$sql = "INSERT INTO your_database_name.Artwork (Artwork_ID, Artist_ID, Gallery_ID, Curate_ID, Art_Type_ID, Art_Style_ID, Art_Class_ID, Art_Subject_ID, Dir, File, Title, Description, Artwork_Notes, Materials_Process_Used, Date_Created, Size_X, Size_Y, Size_Z, Framed_Flag, Unique_Flag, For_Sale_Flag, Sold_Flag, Price) VALUES ('2', '" .$id0. "', '" .$id2. "', '2', '" .$id3. "', '" .$id5. "', '" .$id7. "', '" .$id9. "', 'https://rocketvirtual.com/artwork/', 'DSC00926.jpg', 'Water Lily No. 2', 'Water lily and pads.', 'No notes.', 'No art materials or process.', '2019-05-22', '20', '16', '1', false, false, true, false, '125')";

if ($conn->query($sql) === TRUE) {
    echo "New record 'DSC00926.jpg' created successfully.<BR>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Artwork 3 data, including ID for Artist
$sql = "INSERT INTO your_database_name.Artwork (Artwork_ID, Artist_ID, Gallery_ID, Curate_ID, Art_Type_ID, Art_Style_ID, Art_Class_ID, Art_Subject_ID, Dir, File, Title, Description, Artwork_Notes, Materials_Process_Used, Date_Created, Size_X, Size_Y, Size_Z, Framed_Flag, Unique_Flag, For_Sale_Flag, Sold_Flag, Price) VALUES ('3', '" .$id0. "', '" .$id2. "', '3', '" .$id3. "', '" .$id5. "', '" .$id7. "', '" .$id9. "', 'https://rocketvirtual.com/artwork/', 'DSC01118.jpg', 'Crazy Red Zinnia', 'Red Zinnia flower among others in the garden.', 'No notes.', 'No art materials or process.', '2018-11-01', '20', '16', '1', false, false, true, false, '125')";

if ($conn->query($sql) === TRUE) {
    echo "New record 'DSC01118.jpg' created successfully.<BR>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Insert Artwork 4 data, including ID for Artist
$sql = "INSERT INTO your_database_name.Artwork (Artwork_ID, Artist_ID, Gallery_ID, Curate_ID, Art_Type_ID, Art_Style_ID, Art_Class_ID, Art_Subject_ID, Dir, File, Title, Description, Artwork_Notes, Materials_Process_Used, Date_Created, Size_X, Size_Y, Size_Z, Framed_Flag, Unique_Flag, For_Sale_Flag, Sold_Flag, Price) VALUES ('4', '" .$id0. "', '" .$id2. "', '4', '" .$id3. "', '" .$id5. "', '" .$id7. "', '" .$id11. "', 'https://rocketvirtual.com/artwork/', '20171127_132247.jpg', 'Lands End', 'The San Francisco Golden Gate Bridge and beach.', 'No notes.', 'No art materials or process.', '2018-11-01', '20', '16', '1', false, false, true, false, '125')";

if ($conn->query($sql) === TRUE) {
    echo "New record '20171127_132247.jpg' created successfully.<BR>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Insert Artwork 5 data, including ID for Artist
$sql = "INSERT INTO your_database_name.Artwork (Artwork_ID, Artist_ID, Gallery_ID, Curate_ID, Art_Type_ID, Art_Style_ID, Art_Class_ID, Art_Subject_ID, Dir, File, Title, Description, Artwork_Notes, Materials_Process_Used, Date_Created, Size_X, Size_Y, Size_Z, Framed_Flag, Unique_Flag, For_Sale_Flag, Sold_Flag, Price) VALUES ('5', '" .$id0. "', '" .$id2. "', '5', '" .$id3. "', '" .$id5. "', '" .$id7. "', '" .$id14. "', 'https://rocketvirtual.com/artwork/', 'DSC00181.jpg', 'Joining Columns', 'Pillars of joining columns on a row.', 'No notes.', 'No art materials or process.', '2018-11-01', '20', '16', '1', false, false, true, false, '125')";

if ($conn->query($sql) === TRUE) {
    echo "New record 'DSC00181.jpg' created successfully.<BR>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Insert Artwork 6 data, including ID for Artist
$sql = "INSERT INTO your_database_name.Artwork (Artwork_ID, Artist_ID, Gallery_ID, Curate_ID, Art_Type_ID, Art_Style_ID, Art_Class_ID, Art_Subject_ID, Dir, File, Title, Description, Artwork_Notes, Materials_Process_Used, Date_Created, Size_X, Size_Y, Size_Z, Framed_Flag, Unique_Flag, For_Sale_Flag, Sold_Flag, Price) VALUES ('6', '" .$id0. "', '" .$id2. "', '6', '" .$id3. "', '" .$id5. "', '" .$id7. "', '" .$id9. "', 'https://rocketvirtual.com/artwork/', 'DSC00921.jpg', 'Water Lily No. 1', 'Water lily and pads with reflective light.', 'No notes.', 'No art materials or process.', '2018-11-01', '20', '16', '1', false, false, true, false, '125')";

if ($conn->query($sql) === TRUE) {
    echo "New record 'DSC00921.jpg' created successfully.<BR>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



// Insert Artwork 7 data, including ID for Artist
$sql = "INSERT INTO your_database_name.Artwork (Artwork_ID, Artist_ID, Gallery_ID, Curate_ID, Art_Type_ID, Art_Style_ID, Art_Class_ID, Art_Subject_ID, Dir, File, Title, Description, Artwork_Notes, Materials_Process_Used, Date_Created, Size_X, Size_Y, Size_Z, Framed_Flag, Unique_Flag, For_Sale_Flag, Sold_Flag, Price) VALUES ('7', '" .$id0. "', '" .$id2. "', '7', '" .$id3. "', '" .$id5. "', '" .$id7. "', '" .$id13. "', 'https://rocketvirtual.com/artwork/', 'DSC_0295.jpg', 'Candy Machines', 'Colorful candy machines.', 'No notes.', 'No art materials or process.', '2018-11-01', '20', '16', '1', false, false, true, false, '125')";

if ($conn->query($sql) === TRUE) {
    echo "New record 'DSC_0295.jpg' created successfully.<BR>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
?>

</body>
</html>
