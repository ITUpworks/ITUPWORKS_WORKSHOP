<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ITUpwork";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// sql to create table

$sql = "CREATE TABLE Employee (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Employee created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
