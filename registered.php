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
      <div class="btn">
        <button><a href="index.php">Go back</a></button>
      </div>
    </body>
</html>