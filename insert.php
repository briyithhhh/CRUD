<?php
include('connection.php');
$conn = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user (id, name, lastname, username, email, password) VALUES ('$id', '$name', '$lastname', '$username', '$email', '$password')";
$query = mysqli_query($conn, $sql);

if($query){
  header("Location: index.php");
};
?>