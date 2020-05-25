  <!doctype html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>A small mess portal</title>
  </head>

  <body>

    <table>
      <form action="" method="post">
        <tr>
          <td> email : </td>
          <td><input type="email" name="email_input"></td>
        </tr>
        <tr>
          <td>Mess: </td>
          <td><select id="mess" name="mess_input">
              <option value="North">North</option>
              <option value="South">South</option>
              <option value="Yuktahaar">Yuktahaar</option>
              <option value="Kadambh">Kadambh</option>
          </td>
        </tr>
        <tr>
          <td>
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date">
          </td>
        </tr>
        <tr>
          <td>
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date">
          </td>
        </tr>
        <tr>
          <td><input type="submit" name="submit"></td>
        </tr>

      </form>
    </table>



    <?php
    if (isset($_POST["submit"])) {
      include "./dbconfig.php";
      $email_email = $_POST["email_input"];
      $mess_mess = $_POST["mess_input"];
      $start_date = $_POST["start_date"];
      $end_date = $_POST["end_date"];

      $sql = "INSERT INTO demo_table4 (email,mess,date) VALUES ('$email_email','$mess_mess','$start_date');";
      while (strtotime($start_date) < strtotime($end_date)) {
        // echo "$start_date \n";
        $start_date = date("Y-m-d", strtotime("+1 day", strtotime($start_date)));
        $sql .= "INSERT INTO demo_table4 (email,mess,date) VALUES ('$email_email','$mess_mess','$start_date');";
      }
      mysqli_multi_query($conn, $sql);
      // echo "$sql \n";
      // mysqli_query($conn,"INSERT INTO demo_table "); 

      echo " Added Successfully ";
    }

    ?>

  </body>

  </html>