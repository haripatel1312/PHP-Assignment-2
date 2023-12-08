<?php
$host = "localhost:3306";
$username = "root";
$password = "Hari@@123";
$dbname = "assignment2";

// Create a database connection
$conn=mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful


// Use prepared statements to prevent SQL injection
$fname = $_POST["rfname"];
$lname = $_POST["rlname"];
$gmail = $_POST["registerEmail"];
$pass = $_POST["registerPassword"];
$duplicate="SELECT * FROM users where email='$gmail'";
$result1=mysqli_query($conn,$duplicate);
if (mysqli_num_rows($result1) > 0) {
    echo "Duplicate data";
} 
else {
    $query = "INSERT INTO users VALUES ('$fname', '$lname', '$gmail', '$pass')";
    $result=mysqli_query($conn, $query);
    if ($result) {
        echo "inserted";
    }
}

// Close the prepared statement and database connection
?>