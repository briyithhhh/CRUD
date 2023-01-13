<?php
include('connection.php');
$conn = connection();

$id = $_GET['id'];
if (isset($id)) {
  // $id = $_GET['id'];
  $sql= "SELECT * FROM user WHERE id = '$id'";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($query);

} else {
  echo "Error";
}
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
  <form action="edit.php" method="POST" class="form">
      <div class="title">
        <h1>Edit users</h1>
      </div>
      <div class="input">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="name" placeholder="Name" value="<?= $row['name'] ?>">
        <input type="text" name="lastname" placeholder="Lastname" value="<?= $row['lastname'] ?>">
        <input type="text" name="username" placeholder="Username" value="<?= $row['username'] ?>">
        <input type="email" name="email" placeholder="Email" value="<?= $row['email'] ?>">
        <input type="password" name="password" placeholder="Password" value="<?= $row['password'] ?>">
      </div>
      <div class="button">
        <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>