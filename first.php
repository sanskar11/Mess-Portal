  <!doctype html>
  <html>

  <head>
    <meta charset="utf-8">
    <title>A small mess portal</title>
  </head>

  <body>

    <table>

      <h1>CREATE NEW ENTRY:</h1>
      <form action="new_entry.php" method="post">
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
          <td><input type="submit" name="Create_New" value="submit"></td>
        </tr>

      </form>
      </table>

      <br><br>
      <table>
        <h1>CHANGE EXISTING ENTRY:</h1>
        <form action="change_entry.php" method="post">
          <tr>
            <td>email:</td>
            <td><input type="email" name="email_to_change"></td>
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
              <label for="start_date">Date:</label>
              <input type="date" id="date" name="date_to_change">
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" name="Change_Entry" value="submit">
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
    include "./dbconfig.php";
    $dis = mysqli_query($conn, "SELECT * FROM demo_table5;");
    // echo "$dis \n";
    if ($dis == true) {
      if (mysqli_num_rows($dis) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($dis)) {
          echo "Email:" . $row["email"] . " Mess " . $row["mess"] . " Date " . $row["date"] . "<br>";
        }
      } else {
        $query = "CREATE TABLE demo_table5(
          email VARCHAR(30) NOT NULL,
          mess VARCHAR(30) NOT NULL,
          date DATE NOT NULL);";
        mysqli_query($conn, $query);
      }
    } else {
      echo "error: " . mysqli_error($conn);
      $query = "CREATE TABLE demo_table5(
        email VARCHAR(30) NOT NULL,
        mess VARCHAR(30) NOT NULL,
        date DATE NOT NULL);";
      mysqli_query($conn, $query);
    }
    ?>

  </body>

  </html>