<?php
include 'authendication.php';
$limit = 2;

if(isset($_GET['page']))
  {
    $page = $_GET['page'];
  }
  else
  {
    $page = 1;
  }

  $start_from = ($page - 1) * $limit;
  $sql = mysqli_query($conn,"SELECT * FROM register ORDER BY ID ASC LIMIT $start_from, $limit");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>userid</th>  
<th>First name</th>
<th>Last name</th>
 
<th>email</th> 
</tr>  
<thead>  
<tbody>  
  <?php
    for($i = 1;$row = mysqli_fetch_array($sql);$i++)
    {
    ?>

    <tr>
      <td><?php echo $row['ID']?></td>
      <td><?php echo $row['First_Name']?></td>
      <td><?php echo $row['Last_Name']?></td>
      <td><?php echo $row['Email']?></td>
    </tr>
    <?php
    }
    ?>
</tbody>  
</table>  
<?php
  $sql_count = mysqli_query($conn,"SELECT COUNT('ID') from register");
  $row_fetch = mysqli_fetch_array($sql_count);
  $count_rows = $row_fetch[0];
  $total_pages = ceil($count_rows / $limit);
  $pge_link = "<ul class='pagination'>";  
  for($i=1;$i <= $total_pages;$i++)
  {
    $pge_link.="<li class='page-item'><a class='page-link' href='pagination.php?page=".$i."'>".$i."</a></li>";
  }
  echo $pge_link."</ul>"
?>

</body>
</html>