<?php
  include 'connection.php';

  $conn = connection();
  $sql = "SELECT * FROM user";
  $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/index.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <form action="insert.php" method="POST" class="form">
      <div class="title">
        <h1>Create Users</h1>
      </div>
      <div class="input">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="lastname" placeholder="Lastname">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
      </div>
      <div class="button">
        <button type="submit">Create</button>
    </form>
    <button><a href="registered.php">show</a></button>
  </div>
</body>
</html>