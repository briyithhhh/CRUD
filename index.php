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
  <title>Document</title>
</head>
<body>
  <div class="container">
    <form action="insert.php" method="POST" class="form">
      <div class="title">
        <h1>Crear usuarios</h1>
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
  </div>

  <div class="table">
    <div class="tittle">
      <h1>Users registered</h1>
    </div>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Lastname</th>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
          <th></th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        <?php while($row = mysqli_fetch_array($query)): ?>
        <tr>
          <th> <?= $row['id'] ?> </th>
          <th> <?= $row['name'] ?> </th>
          <th> <?= $row['lastname'] ?> </th>
          <th> <?= $row['username'] ?> </th>
          <th> <?= $row['email'] ?> </th>
          <th> <?= $row['password'] ?> </th>
  
          <th><a href="update.php?id=<?= $row['id'] ?>">Edit</a></th>
          <th><a href="delete.php?id=<?= $row['id'] ?>">Delete</a></th>
        </tr>
        <?php endwhile ?>
    </tbody>
  </div>
</body>
</html>