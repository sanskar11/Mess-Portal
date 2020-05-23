  <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Insert values to MySQL database</title>
</head>

<body>

<table>
<form action="" method="post">
<tr>
<td> Text : </td><td><input type="text" name="text_input"></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td></tr>

</form>
</table>



<?php
if(isset($_POST["submit"]))
{
 
$hostname = "localhost";

$username = "root";

$password = "sanskar123";

$dbname = "test";

 $conn = mysqli_connect($hostname, $username, $password);

 if (!$conn)

 {

 die('Could not connect: ' . mysqli_connect_error());

 }
echo "connection succesfull";
 mysqli_select_db($conn,$dbname);

 
$text_text = $_POST["text_input"];

mysqli_query($conn,"INSERT INTO demo_table_2 (text_input) VALUES ('$text_text')"); 

echo " Added Successfully ";

}

 ?>

</body>
</html>
