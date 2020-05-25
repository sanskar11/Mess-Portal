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
          <td><input type="submit" name="submit"></td>
        </tr>

      </form>
    </table>



    <?php
    if (isset($_POST["submit"])) {
      include "./dbconfig.php";
      $email_email = $_POST["email_input"];
      $mess_mess = $_POST["mess_input"];

      mysqli_query($conn, "INSERT INTO demo_table (email,mess) VALUES ('$email_email','$mess_mess')");
      // mysqli_query($conn,"INSERT INTO demo_table "); 

      echo " Added Successfully ";
    }

    ?>

  </body>

  </html>