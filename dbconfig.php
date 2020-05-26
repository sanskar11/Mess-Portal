<?php


$hostname = "localhost";

$username = "sanskar";

$password = "1234";

$dbname = "test2";

$conn = mysqli_connect($hostname, $username, $password);

if (!$conn) {

    die('Could not connect: ' . mysqli_connect_error());
}
echo "connection successful<br>";
$db_selected=mysqli_select_db($conn, $dbname);

if (!$db_selected) {
    $sql = 'CREATE DATABASE test2';
    mysqli_query($conn,$sql);
    mysqli_select_db($conn, $dbname);
}
?>