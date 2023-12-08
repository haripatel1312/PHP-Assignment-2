<?php
require 'insert.php';

$email = $_POST["loginremail"];
$password = $_POST["loginpassword"];
$duplicate="SELECT *FROM users where email='$email' or pass = '$password'";
$result1=mysqli_query($conn,$duplicate);
if (mysqli_num_rows($result1) > 0) {
    echo "Logged in Successfully :)";
} 
else {
   echo"Wrong email or password";
}
?>