
<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="form.php">
        Name <input type="text" name="name" ><br>
        Email <input type="Email" name="email"><br>
        Contact <input type="text" name="contact" maxlength="10"><br>
        City <input type="text" name="city"><br>
        Course <input type="text" name="course"><br>
        Interest:<br>
        Volleyball <input type="checkbox" value="Volleyball" name="interest[]"> 
        Music <input type="checkbox" value="music" name="interest[]"> 
        reading books <input type="checkbox" value="reading books" name="interest[]"> 
        indoor games <input type="checkbox" value="indoor games" name="interest[]"><br>
        <input type="submit" name="submit" ><br>
    </form>

    <?php
    if(isset($_POST["submit"])){
      $name=$_POST["name"];
      $email=$_POST["email"];
      $contact=$_POST["contact"];
      $city=$_POST["city"];
      $course=$_POST["course"];
      $interest=$_POST["interest"];
    }
    else
      echo "<br>No Input";
    ?>

    <table border=1px solid; style=" border-collapse: collapse">
              <tr>
                  <th>Name</th>
                  <th>Eamil</th>
                  <th>Contact</th>
                  <th>city</th>
                  <th>course</th>
                  <th>interest</th>
              </tr>
              <tr>
                  <th><?php echo "$name" ?></th>
                  <th><?php echo "$email" ?></th>
                  <th><?php echo "$contact" ?></th>
                  <th><?php echo "$city" ?></th>
                  <th><?php echo "$course" ?></th>
                  <th><?php echo implode(",", $interest); ?></th>
              </tr>
          </table>

  </body>
</html>
