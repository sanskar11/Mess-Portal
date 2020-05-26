
<?php
// echo 'yeahh yaha toh hain';
if (isset($_POST["submit"])) {
    include "./dbconfig.php";
    // echo "IT IS REACHING HERE";
    $email_email = $_POST["email_input"];
    $mess_mess = $_POST["mess_input"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    $sql = "INSERT INTO demo_table5 (email,mess,date) VALUES ('$email_email','$mess_mess','$start_date');";
    while (strtotime($start_date) < strtotime($end_date)) {
      // echo "$start_date \n";
      $start_date = date("Y-m-d", strtotime("+1 day", strtotime($start_date)));
      $sql .= "INSERT INTO demo_table5 (email,mess,date) VALUES ('$email_email','$mess_mess','$start_date');";
    }
    mysqli_multi_query($conn, $sql);
    // echo "$sql \n";
    // mysqli_query($conn,"INSERT INTO demo_table "); 

    echo " Added Successfully ";
  }


?>