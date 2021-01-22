<?php
  include 'authendication.php';
  error_reporting(0);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <form class="form-inline" method="post" action="">
    <input type="text" name="roll_no" class="form-control" placeholder="Search User">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>

  <table>
    <tr>
      <td>ID</td>
      <td>First Name</td>
      <td>Last_Name</td>
      <td>Email</td>
    <tr>
    <?php
    extract($_POST);
    $sql = mysqli_query($conn,"SELECT * FROM register where First_Name='$roll_no'") or die("could not perfom this action");
      for($i=0; $row = mysqli_fetch_array($sql);$i++)
      {
    ?>

    <tr>
    <td><?php echo $row['ID']?></td>
        <td><?php echo $row['First_Name'] ?></td>
        <td><?php echo $row['Last_Name'] ?></td>
        <td><?php echo $row['Email'] ?></td>
    </tr>

    <?php
      }
    ?>
  </table>
</div>
</body>
</html>