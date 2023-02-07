<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Raktim">
    <meta name ="description" content="login">
    <link rel="stylesheet" type="text/css" href="style_login.css">
    <link rel="icon" type="png/img/gif" href="img/login.png">

    <title> Login </title>
  </head>

  <body>

    <div class= "title">
      <h1 id="h1ForUser"> Employees Management </h1>
      <h4 id="h4ForUser"> Admin Panel </h4>

    </div>

    <div class="login_form">

      <form method="post" action="backend_files/login_backend.php">
        <table>
          <tr>
          <th>
            <label for="username"> Username: </label>
          </th>
          <th>
            <input type="text" name="username_input" placeholder="Enter Username.">
          </th>
        </tr>

        <tr>
        <th>
          <label for="password"> Password: </label>
        </th>
        <th>
          <input type="text" name="password_input" placeholder="Enter Password.">
        </th>
        </tr>
           <th > <input type="submit" value="Login" style="margin-left: 100px; margin-top: 20px;"> </th>
        <tr>
        <tr>
          <th> </th>
          <th> <a href="#"> Forgot Password </a> </th>
        </tr>


        </tr>
        </table>
      </form>
    </div>


  </body>

  <footer>
  </footer>


</html>
