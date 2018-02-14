<?php
$servername = "localhost";
$username = "a010380";
$password = "414852";
$dbname = "hw3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set('Asia/Taipei');
$id=6;
$datetime = date ("Y- m - d / H : i : s"); 

$sql = "INSERT INTO articles (id, title, body, created_at)
VALUES ('$id', 'title', 'body','$datetime')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
