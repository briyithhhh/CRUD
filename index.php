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
  <link rel="stylesheet" href="styles/style.css">
  <link

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
              required
              oninput="validateName(this)"
              >
            </div>
            <div id="lname" class="col">
              <input 
              type="text" 
              name="lastname" 
              autocomplete="off"
              placeholder="Lastname"
              required
              oninput="validateName(this)"
              >
            </div>
          </div>

          <input 
          type="text" 
          name="username"
          autocomplete="off"
          placeholder="Username"
          required
          oninput="validateName(this)"
              >
          </div>
          <input 
          type="email" 
          name="email" 
          autocomplete="off"
          placeholder="Email"
          required
          oninput="validateEmail(this)"
          >
          <input 
          type="password" 
          name="password" 
          autocomplete="off"
          placeholder="Password"
          required
          oninput="validatePassword(this)"
          >
          <div class="button" >
            <button type="submit" class="btn"><a href="index.php">Create</a></button>
          </div>
          
        </div>
      </form>


    <div class="table">
        <div class="tittle-users">
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

          <tbody class="tabla-body">
            <?php while($row = mysqli_fetch_array($query)): ?>
            <tr>
              <th> <?= $row['id'] ?> </th>
              <th> <?= $row['name'] ?> </th>
              <th> <?= $row['lastname'] ?> </th>
              <th> <?= $row['username'] ?> </th>
              <th> <?= $row['email'] ?> </th>
              <th> <?= $row['password'] ?> </th>
      
              <th id="edit"><a href="update.php?id=<?= $row['id'] ?>">✏️</a></th>
              <th id="edit"><a href="delete.php?id=<?= $row['id'] ?>">🗑️</a></th>
            </tr>
            <?php endwhile ?>
        </tbody>
      </div>

</body>

</html>