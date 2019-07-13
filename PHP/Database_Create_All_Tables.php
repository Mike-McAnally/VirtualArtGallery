<!DOCTYPE>
<html>
  <head>
    <meta charset="utf-8">
    <title>DB Create All Tables</title>
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



// CREATE TABLE 'Gallery'
$sql = "CREATE TABLE your_database_name.Gallery (
 Gallery_ID INT NOT NULL AUTO_INCREMENT,
 Gallery_Name VARCHAR(75) NOT NULL UNIQUE DEFAULT 'Virtual Art Gallery',
 Dir VARCHAR(100) NOT NULL DEFAULT 'https://rocketvirtual.com/gltf/',
 File VARCHAR(75) NOT NULL DEFAULT 'finalVRArtGallery.gltf',
 Pos_X FLOAT NOT NULL DEFAULT -18.826,
 Pos_Y FLOAT NOT NULL DEFAULT 0.006,
 Pos_Z FLOAT NOT NULL DEFAULT 19.083,
 Rot_X FLOAT NOT NULL DEFAULT 0,
 Rot_Y FLOAT NOT NULL DEFAULT 0,
 Rot_Z FLOAT NOT NULL DEFAULT 0,
 Scale_X FLOAT NOT NULL DEFAULT 1,
 Scale_Y FLOAT NOT NULL DEFAULT 1,
 Scale_Z FLOAT NOT NULL DEFAULT 1,
 PRIMARY KEY (Gallery_ID)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Gallery successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// CREATE TABLE 'Art_Type'
$sql = "CREATE TABLE your_database_name.Art_Type (
 Art_Type_ID INT NOT NULL AUTO_INCREMENT,
 Art_Type VARCHAR(100) NOT NULL UNIQUE,
 PRIMARY KEY (Art_Type_ID)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Type successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}



// CREATE TABLE 'Art_Style'
$sql = "CREATE TABLE your_database_name.Art_Style (
 Art_Style_ID INT NOT NULL AUTO_INCREMENT,
 Art_Style VARCHAR(100) NOT NULL UNIQUE,
 PRIMARY KEY (Art_Style_ID)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Style successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}



// CREATE TABLE 'Art_Class'
$sql = "CREATE TABLE your_database_name.Art_Class (
 Art_Class_ID INT NOT NULL AUTO_INCREMENT,
 Art_Class VARCHAR(100) NOT NULL UNIQUE,
 PRIMARY KEY (Art_Class_ID)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Class successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// CREATE TABLE 'Art_Subject'
$sql = "CREATE TABLE your_database_name.Art_Subject (
 Art_Subject_ID INT NOT NULL AUTO_INCREMENT,
 Art_Subject VARCHAR(100) NOT NULL UNIQUE,
 PRIMARY KEY (Art_Subject_ID)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Subject successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}




// CREATE TABLE 'Artist_Type'
$sql = "CREATE TABLE your_database_name.Artist_Type (
 Artist_Type_ID INT NOT NULL AUTO_INCREMENT,
 Artist_Type VARCHAR(100) NOT NULL UNIQUE,
 PRIMARY KEY (Artist_Type_ID)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Artist_Type successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// CREATE TABLE 'Discount'
$sql = "CREATE TABLE your_database_name.Discount (
 Discount_Code_ID INT NOT NULL AUTO_INCREMENT,
 Discount_Amount INT NOT NULL UNIQUE,
 PRIMARY KEY (Discount_Code_ID)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Discount successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// CREATE TABLE 'Ecommerce_System'
$sql = "CREATE TABLE your_database_name.Ecommerce_System (
 Ecommerce_ID INT NOT NULL AUTO_INCREMENT,
 Ecommerce_System_Name VARCHAR(100) NOT NULL UNIQUE,
 PRIMARY KEY (Ecommerce_ID)
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Ecommerce_System successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// CREATE TABLE 'Artist'
$sql = "CREATE TABLE your_database_name.Artist (
 Artist_ID INT NOT NULL AUTO_INCREMENT,
 Artist_Type_ID INT NOT NULL,
 First VARCHAR(75) NOT NULL DEFAULT ' ',
 Middle VARCHAR(75) NOT NULL DEFAULT ' ',
 Last VARCHAR(75) NOT NULL,
 Known_As VARCHAR(75) NOT NULL,
 Birth_Date DATE NOT NULL,
 Death_Date DATE NOT NULL,
 Bio VARCHAR(1024) NOT NULL DEFAULT 'No bio available.',
 Pic_Dir VARCHAR(100) NOT NULL,
 Pic_File VARCHAR(75) NOT NULL,
 Email VARCHAR(75) NOT NULL,
 PRIMARY KEY (Artist_ID),
 KEY fk1_Artist (Artist_Type_ID),
 CONSTRAINT Artist_const1 FOREIGN KEY (Artist_Type_ID) REFERENCES Artist_Type (Artist_Type_ID) ON UPDATE CASCADE ON DELETE NO ACTION
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Artist successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// CREATE TABLE 'Curate'
$sql = "CREATE TABLE your_database_name.Curate (
 Curate_ID INT NOT NULL AUTO_INCREMENT,
 Gallery_ID INT NOT NULL,
 Pos_X FLOAT NOT NULL,
 Pos_Y FLOAT NOT NULL,
 Pos_Z FLOAT NOT NULL,
 Rot_X FLOAT NOT NULL,
 Rot_Y FLOAT NOT NULL,
 Rot_Z FLOAT NOT NULL,
 Scale_X FLOAT NOT NULL DEFAULT 1,
 Scale_Y FLOAT NOT NULL DEFAULT 1,
 Scale_Z FLOAT NOT NULL DEFAULT 1,
 Spot_X FLOAT NOT NULL,
 Spot_Y FLOAT NOT NULL,
 Spot_Z FLOAT NOT NULL,
 Spot_Rot_X FLOAT NOT NULL,
 Spot_Rot_Y FLOAT NOT NULL,
 Spot_Rot_Z FLOAT NOT NULL,
 Spot_Scale_X FLOAT NOT NULL DEFAULT 1,
 Spot_Scale_Y FLOAT NOT NULL DEFAULT 1,
 Spot_Scale_Z FLOAT NOT NULL DEFAULT 1,
 Spot_Intensity FLOAT NOT NULL,
 Spot_Angle FLOAT NOT NULL,
 Desc_X FLOAT NOT NULL,
 Desc_Y FLOAT NOT NULL,
 Desc_Z FLOAT NOT NULL,
 Desc_Rot_X FLOAT NOT NULL,
 Desc_Rot_Y FLOAT NOT NULL,
 Desc_Rot_Z FLOAT NOT NULL,
 Desc_Scale_X FLOAT NOT NULL DEFAULT 1,
 Desc_Scale_Y FLOAT NOT NULL DEFAULT 1,
 Desc_Scale_Z FLOAT NOT NULL DEFAULT 1,
 Buy_X FLOAT NOT NULL,
 Buy_Y FLOAT NOT NULL,
 Buy_Z FLOAT NOT NULL,
 Buy_Rot_X FLOAT NOT NULL,
 Buy_Rot_Y FLOAT NOT NULL,
 Buy_Rot_Z FLOAT NOT NULL,
 Buy_Scale_X FLOAT NOT NULL DEFAULT 1,
 Buy_Scale_Y FLOAT NOT NULL DEFAULT 1,
 Buy_Scale_Z FLOAT NOT NULL DEFAULT 1,
 PRIMARY KEY (Curate_ID),
 KEY fk1_Curate (Gallery_ID),
 CONSTRAINT Curate_const1 FOREIGN KEY (Gallery_ID) REFERENCES Gallery (Gallery_ID) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Curate successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// CREATE TABLE 'Artwork'
$sql = "CREATE TABLE your_database_name.Artwork (
 Artwork_ID INT NOT NULL AUTO_INCREMENT,
 Artist_ID INT NOT NULL,
 Gallery_ID INT NOT NULL,
 Curate_ID INT NOT NULL,
 Art_Type_ID INT NOT NULL,
 Art_Style_ID INT NOT NULL,
 Art_Class_ID INT NOT NULL,
 Art_Subject_ID INT NOT NULL,
 Dir VARCHAR(100) NOT NULL,
 File VARCHAR(75) NOT NULL,
 Title VARCHAR(100) NOT NULL DEFAULT 'No Title.',
 Description VARCHAR(1024) NOT NULL DEFAULT 'No description.',
 Artwork_Notes VARCHAR(255) NOT NULL DEFAULT 'No notes.',
 Materials_Process_Used VARCHAR(255) NOT NULL DEFAULT 'No art materials or process.',
 Date_Created date NOT NULL,
 Size_X FLOAT NOT NULL,
 Size_Y FLOAT NOT NULL,
 Size_Z FLOAT NOT NULL,
 Framed_Flag BOOLEAN NOT NULL DEFAULT false,
 Unique_Flag BOOLEAN NOT NULL DEFAULT false,
 For_Sale_Flag BOOLEAN NOT NULL DEFAULT true,
 Sold_Flag BOOLEAN NOT NULL DEFAULT false,
 Price FLOAT NOT NULL,
 PRIMARY KEY (Artwork_ID),
 KEY fk1_Artwork (Artist_ID),
 KEY fk2_Artwork (Gallery_ID),
 KEY fk3_Artwork (Curate_ID),
 KEY fk4_Artwork (Art_Type_ID),
 CONSTRAINT Artwork_const1 FOREIGN KEY (Artist_ID) REFERENCES Artist (Artist_ID) ON UPDATE CASCADE ON DELETE CASCADE,
 CONSTRAINT Artwork_const2 FOREIGN KEY (Gallery_ID) REFERENCES Gallery (Gallery_ID) ON UPDATE CASCADE ON DELETE NO ACTION,
 CONSTRAINT Artwork_const3 FOREIGN KEY (Curate_ID) REFERENCES Curate (Curate_ID) ON UPDATE CASCADE ON DELETE NO ACTION,
 CONSTRAINT Artwork_const4 FOREIGN KEY (Art_Type_ID) REFERENCES Art_Type (Art_Type_ID) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Artwork successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


// CREATE TABLE 'Art_Sold'
$sql = "CREATE TABLE your_database_name.Art_Sold (
 Customer_ID INT NOT NULL,
 Ecommerce_ID INT NOT NULL,
 Artwork_ID INT NOT NULL,
 Discount_Code_ID INT NOT NULL,
 Price_Sold FLOAT,
 Number_Purchased INT NOT NULL,
 Date_Time_Purchased TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 Delivered_Flag BOOLEAN NOT NULL DEFAULT false,
 PRIMARY KEY (Customer_ID),
 KEY fk1_Art_Sold (Ecommerce_ID),
 KEY fk2_Art_Sold (Artwork_ID),
 KEY fk3_Art_Sold (Discount_Code_ID),
 CONSTRAINT Art_Sold_const1 FOREIGN KEY (Ecommerce_ID) REFERENCES Ecommerce_System (Ecommerce_ID) ON UPDATE CASCADE ON DELETE NO ACTION,
 CONSTRAINT Art_Sold_const2 FOREIGN KEY (Artwork_ID) REFERENCES Artwork (Artwork_ID) ON UPDATE CASCADE ON DELETE NO ACTION,
 CONSTRAINT Art_Sold_const3 FOREIGN KEY (Discount_Code_ID) REFERENCES Discount (Discount_Code_ID) ON UPDATE CASCADE ON DELETE NO ACTION
) ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

if ($conn->query($sql) === TRUE) {
    echo "Table Art_Sold successfully created.<br>";
} else {
    echo "Error: " . $sql . "<br> " . $conn->error;
}


$conn->close();
?>
</body>
</html>
