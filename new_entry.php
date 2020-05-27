<?php
// echo 'yeahh yaha toh hain';
if (isset($_POST["Create_New"])) {
    include "./dbconfig.php";
    // echo "IT IS REACHING HERE";
    $roll_roll = $_POST["roll_input"];
    $mess_mess = $_POST["mess_input"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];

    $sql = "INSERT INTO demo_table1 (roll,mess,date,cancel) VALUES ('$roll_roll','$mess_mess','$start_date','0');";
    while (strtotime($start_date) < strtotime($end_date)) {
      // echo "$start_date \n";
      $start_date = date("Y-m-d", strtotime("+1 day", strtotime($start_date)));
      $sql .= "INSERT INTO demo_table1 (roll,mess,date,cancel) VALUES ('$roll_roll','$mess_mess','$start_date','0');";
    }
    mysqli_multi_query($conn, $sql);
    // echo "$sql \n";
    // mysqli_query($conn,"INSERT INTO demo_table "); 

    echo " Added Successfully ";
    sleep(1);
  }