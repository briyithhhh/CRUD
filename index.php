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
  <div class="container">
    <div class="son">
      <form action="insert.php" method="POST" class="form">
          <h1>Create Users</h1>
        <div class="input">
          <div class="row">
            <div class="col">
              <input 
              type="text"
              name="name" 
              autocomplete="off"
              placeholder="Name"
              >
            </div>
            <div class="col">
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
        </div>
          <button type="submit" class="btn"><a href="index.php">Create</a></button>
        </form>
        <button type="submit" class="btn"><a href="registered.php">show</a></button>

    </div>
  </div>
</html>