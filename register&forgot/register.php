<?php 
    echo time();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../layout/register.css?v=<?php echo filemtime('../layout/register.css'); ?>">
  <title>DEKAPE - REGISTER</title>
</head>

<body>
  <div class="main">
    <form method="POST" action="../php-collect/register.php">
      <b id="log">Register</b><br><br>
      <input type="text" name="inpus" placeholder="input your name"><br><br>
      <input type="number" name="inpass" placeholder="create password"><br><br>
      <button type="submit">Register</button>
    </form>
  </div>
  <p>sudah punya akun?<a href="../index.php">login</a>!</p>
</body>

</html>