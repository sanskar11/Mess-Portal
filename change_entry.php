<?php

if (isset($_POST["Change_Entry"])) {
    include "./dbconfig.php";
    $email_email = $_POST["email_to_change"];
    $mess_mess = $_POST["mess_to_change"];
    $start_date = $_POST["start_date_to_change"];
    $end_date = $_POST["end_date_to_change"];

    $sql="UPDATE demo_table5 SET mess='$mess_mess' WHERE (email='$email_email' AND date='$start_date');";
    while (strtotime($start_date) < strtotime($end_date)) {
        // echo "$start_date \n";
        $start_date = date("Y-m-d", strtotime("+1 day", strtotime($start_date)));
        $sql.="UPDATE demo_table5 SET mess='$mess_mess' WHERE (email='$email_email' AND date='$start_date');";
      }
    // echo "$sql \n";
    mysqli_multi_query($conn,$sql);
    echo "UPDATE successful";
}
