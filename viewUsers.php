<?php
include 'authendication.php';


?>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>
</head>
<body>
    <table>
        <tr>
          <td>ID</td>
            <td>First_Name</td>
            <td>Last_Name</td>
            <td>Email</td>
        <tr>
        <?php
        $sql = mysqli_query($conn,"SELECT * FROM register");
        
        $count = mysqli_num_rows($sql);
        for($i=1;$row = mysqli_fetch_array($sql);$i++)
        {
        ?>
        <tr>
        <td><?php echo $row['ID'] ?></td>
        <td><?php echo $row['First_Name'] ?></td>
        <td><?php echo $row['Last_Name'] ?></td>
            <td><?php echo $row['Email'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>