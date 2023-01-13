<?php

include('connection.php');
$conn = connection();

$id=$_GET["id"];

$sql="DELETE FROM user WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>