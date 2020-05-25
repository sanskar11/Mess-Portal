<?php


$hostname = "localhost";

$username = "sanskar";

$password = "1234";

$dbname = "test";

$conn = mysqli_connect($hostname, $username, $password);

if (!$conn) {

    die('Could not connect: ' . mysqli_connect_error());
}
echo "connection successful";
mysqli_select_db($conn, $dbname);
?>