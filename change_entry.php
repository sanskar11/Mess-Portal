<?php

if (isset($_POST["Change_Entry"])) {
    include "./dbconfig.php";
    $email_email = $_POST["email_to_change"];
    $mess_mess = $_POST["mess_to_change"];
    $date_date = $_POST["date_to_change"];

    $sql="UPDATE demo_table5 SET mess='$mess_mess' WHERE (email='$email_email' AND date='$date_date');";
    // echo "$sql \n";
    mysqli_query($conn,$sql);
    echo "UPDATE successful";
}
?>