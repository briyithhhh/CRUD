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
 <link rel="stylesheet" href="style.css">

  <title>Document</title>
</head>
<body>
    <div class="son">
      <form action="insert.php" method="POST" class="form">
          <h1>Create Users</h1>
        <div class="input">
          <div class="row">
            <div id="name" class="col">
              <input 
              type="text"
              name="name" 
              autocomplete="off"
              placeholder="Name"
              >
            </div>
            <div id="lname" class="col">
              <input 
              type="text" 
              name="lastname" 
              autocomplete="off"
              placeholder="Lastname"
              >
            </div>
          </div>

          <input 
          type="text" 
          name="username"
          autocomplete="off"
          placeholder="Username"
              >
          </div>
          <input 
          type="email" 
          name="email" 
          autocomplete="off"
          placeholder="Email"
          >
          <input 
          type="password" 
          name="password" 
          autocomplete="off"
          placeholder="Password"
          >
          <div class="button" >
            <button type="submit" class="btn"><a href="index.php">Create</a></button>
          </div>
          <!-- <button class="btn" id="show"><a href="registered.php">show</a></button> -->
        </div>
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