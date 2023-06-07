<?php 
    require "banco-dados.php";
?>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>trabalho02</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form action="cadastro.php" method="POST">

      <div class="user-box">
      <input type="text" id="login" name="login" required><br>
        <label for="login">Login:</label>
      </div>
      <div class="user-box">
      <input type="password" id="password" name="password" required><br>
        <label for="password">Password:</label>
      </div>
      <a href="capturar.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Login
      </a>
      <a href="cad.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Cadastrar
      </a>
    </form>
  </div>
  
</body>
</html>

