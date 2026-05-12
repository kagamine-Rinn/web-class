<?php
echo "halo" . time();
header("Cache-Control: no-cache, no-store, must-revalidate");

header("Pragma: no-cache");

header("Expires: 0");
?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="layout/style1.css?v=<?php echo filemtime('layout/style1.css'); ?>">
  <title>DEKAPE</title>
</head>

<body>
  <div class="main">
    <form method="POST" action="php-collect/login.php">
    <h1 id="log">Login</h1>
    <h2>username</h2>
    <input type="number" name="user" placeholder="input your username">
    <h2>password</h2>
    <input type="password" name="pass" placeholder="input your password" id="inpa"><br>
    <button type="submit" id="btn">Login</button>
    </form>
  </div>
    <p> belum punya akun?
    <a href="register&forgot/register.php">register</a></p>
</body>

</html>