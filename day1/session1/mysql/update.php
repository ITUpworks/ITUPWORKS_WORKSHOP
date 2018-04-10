<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ITUpwork";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "UPDATE Employee SET lastname='saini' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
