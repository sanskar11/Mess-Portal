  <!doctype html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>Mini Mess Portal</title>
  </head>

  <body>

    <table>

      <h1>REGISTER MESS:</h1>
      <form action="new_entry.php" method="post">
        <tr>
          <td> Roll Number : </td>
          <td><input type="number" name="roll_input"></td>
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
          <td><input type="submit" name="Create_New" value="submit"></td>
        </tr>

      </form>
    </table>

    <br><br>
    <table>
      <h1>CHANGE MESS REGISTRATION:</h1>
      <form action="change_entry.php" method="post">
        <tr>
          <td>Roll Number:</td>
          <td><input type="number" name="roll_to_change"></td>
        </tr>
        <tr>
          <td>Mess:</td>
          <td><select id="mess" name="mess_to_change">
              <option value="North">North</option>
              <option value="South">South</option>
              <option value="Yuktahaar">Yuktahaar</option>
              <option value="Kadambh">Kadambh</option>
          </td>
        </tr>
        <tr>
          <td>
            <label for="start_date">Start Date:</label>
            <input type="date" id="date" name="start_date_to_change">
          </td>
        </tr>
        <tr>
          <td>
            <label for="start_date">End Date:</label>
            <input type="date" id="date" name="end_date_to_change">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="Change_Entry" value="submit">
          </td>
        </tr>
      </form>
    </table>

    <br><br>
    <table>
      <h1>CANCEL MESS REGISTRATION:</h1>
      <form action="delete_entry.php" method="post">
        <tr>
          <td>Roll Number:</td>
          <td><input type="number" name="roll_to_delete"></td>
        </tr>
        <tr>
          <td>
            <label for="start_date">Start Date:</label>
            <input type="date" id="date" name="start_date_to_delete">
          </td>
        </tr>
        <tr>
          <td>
            <label for="start_date">End Date:</label>
            <input type="date" id="date" name="end_date_to_delete">
          </td>
        </tr>
        <tr>
          <td>
            <label for="uncancel">Uncancel Mess Registration</label>
            <input type="checkbox" name="uncancel_checkbox">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="Delete_Entry" value="submit">
          </td>
        </tr>
      </form>
    </table>


    <!-- <form action="" method="post"> -->

    <?php
    include "./new_entry.php";

    ?>
    <?php
    include "./change_entry.php";
    ?>

    <?php
    include "./delete_entry.php";
    ?>

    <?php
    include "./dbconfig.php";
    $dis = mysqli_query($conn, "SELECT * FROM demo_table1;");
    // echo "$dis \n";
    if ($dis == true) {
      if (mysqli_num_rows($dis) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($dis)) {
          echo "roll:" . $row["roll"] . " Mess " . $row["mess"] . " Date " . $row["date"] . "<br>";
        }
      } else {
        echo "0 results found\n";
      }
    } else {
      echo "error: " . mysqli_error($conn);
      $query = "CREATE TABLE demo_table1(
        roll INT(30) NOT NULL,
        mess VARCHAR(30) NOT NULL,
        date DATE NOT NULL,
        cancel INT(1) NOT NULL);";
      mysqli_query($conn, $query);
    }
    ?>

  </body>

  </html>