<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
</head>

<body>
<h1> All data </h1> <hr> <br>
<table style="width:100%">

  <?php
    session_start();
    include("db_connection.php");

    $sql1 = "show columns from employees";
    $result1 = mysqli_query($conn, $sql1);
    while($row1 = mysqli_fetch_row($result1)){
      ?>

        <th> <?php echo $row1[0];?> </th>


    <?php } ?>
    <?php
    $sql = "select * from employees";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_row($result)){
      ?>
      <tr>
        <th> <a href="../demo.php?name=<?php echo $row[0];?>"> <?php echo $row[0];?>  </th>
        <th> <?php echo $row[1];?> </th>
        <th> <?php echo $row[2];?> </th>
        <th> <?php echo $row[3];?> </th>
        <th> <?php echo $row[4];?> </th>
        <th> <?php echo $row[5];?> </th>
        <th> <?php echo $row[6];?> </th>
        <th> <?php echo $row[7];?> </th>
        <th> <?php echo $row[8];?> </th>
        <th> <?php echo $row[9];?> </th>
        <th> <?php echo $row[10];?> </th>
      </tr>

    <?php } ?>
</table>

<?php
$_SESSION['value'] = "1";

?>


</body>

<footer>

</footer>



</html>
