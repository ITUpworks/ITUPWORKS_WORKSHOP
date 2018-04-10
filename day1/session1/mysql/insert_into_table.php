<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ITUpwork";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "INSERT INTO Employee (firstname, lastname, email)
VALUES ('Hemant', 'kumar', 'hemant@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
