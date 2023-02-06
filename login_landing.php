<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name = "author" content="Prova">
    <meta name="description" content="Index Page">
    <link rel="stylesheet" type = "text/css" href="style.css">


    <title> Home Page </title>
  </head>
  <h1 id = "MainTitle01"> Employee Information Page </h1>
  <hr id="hr01">


  <body>
    <!--menu button-->
  <div>
    <ul >
      <li> <a href="backend_files/employees.php"> Employees </a></li>
      <li> <a href="department.php"> Departments </a></li>
      <li> <a href="location.php"> Location </a></li>
      <li> <a href="department.php"> Departments </a></li>
    </ul>
  </div>
    <br>
    <br>

  </body>
  <h3 style=" margin-top: 50px; text-decoration: underline; text-align: center;">  Employee Input Form  </h3>

  <div class= "form">
  <form style="margin-left: 10px;" action="backend_files/employeeInput.php" method="post">
    <label> First Name </label>
    <input type="text" name="fname" placeholder="fname">
    <br>
    <label> Last Name </label>
    <input type="text" name="lname" placeholder="lname">
    <br>
    <label> Email </label>
    <input type="text" name="email" placeholder="email">
    <br>
    <label> Phone Number </label>
    <input type="text" name="phone" placeholder="phone number">
    <br>
    <label> Hire date </label>
    <input type="date" name="hire_Date">
    <br>
    <label> Job ID </label>
    <select id="job_id" name="job_id">
      <?php
      include_once("backend_files/db_connection.php");
      session_start();
      $sql = "SELECT DISTINCT job_id FROM `jobs`";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_row($result)){
        ?>
        <option value="<?php echo $row[0]?>"> <?php echo $row[0]?> </option>
        <?php
      }
      ?>
    </select>
    <br>
    <label> Salary </label>
    <input type="text" name="salary" placeholder="salary">
    <br>
    <label> Commission </label>
    <input type="text" name="commission" placeholder="Commission PCT">
    <br>

    <label> Manager ID </label>
    <select id="manager_id" name="manager_id">
      <?php
      include_once("/backend_files/db_connection.php");
      session_start();
      $sql = "SELECT DISTINCT manager_id FROM `Employees` ORDER BY Employee_Id DESC";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_row($result)){
        ?>
        <option value="<?php echo $row[0]?>"> <?php echo $row[0]?> </option>
        <?php
      }
      ?>
    </select>
    <br>
    <label> Department ID </label>
    <select id="department_id" name="department_id">
      <?php
      include_once("/backend_files/db_connection.php");
      session_start();
      $sql = "SELECT DISTINCT department_id FROM `Employees` ORDER BY Employee_Id DESC";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_row($result)){
        ?>
        <option value="<?php echo $row[0]?>"> <?php echo $row[0]?> </option>
        <?php
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Submit " style="margin-left: 30%; color: green;">
  </form>
</div>



</html>
