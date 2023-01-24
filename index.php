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
              onblur="validar(this)" 
              onkeyup="validar(this)"
              validarLong(this, 3)
              required
              >
            </div>
            <div id="lname" class="col">
              <input 
              type="text" 
              name="lastname" 
              autocomplete="off"
              placeholder="Lastname"
              onblur="validar(this)" 
              onkeyup="validar(this)"
              validarLong(this, 3)
              required
              >
            </div>
          </div>

          <input 
          type="text" 
          name="username"
          autocomplete="off"
          placeholder="Username"
          onblur="validar(this)" 
          onkeyup="validar(this)"
          validarLong(this, 3)
          required
              >
          </div>
          <input 
          type="email" 
          name="email" 
          autocomplete="off"
          placeholder="Email"
          onblur="validar(this)" 
          onkeyup="validar(this)" 
          validarLong(this, 9)
          required
          >
          <input 
          type="password" 
          name="password" 
          autocomplete="off"
          placeholder="Password"
          onblur="validar(this)" 
          onkeyup="validar(this)" 
          validarLong (this, 6)
          required
          >
          <div class="button" >
            <button type="submit" class="btn"><a href="index.php">Create</a></button>
          </div>
          
        </div>
      </form>
    </div>

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

<!--VALIDACION DE CAMPOS-->

<script type="text/javascript">
            function validar(elemento) {
                if(elemento.value==''){
                    elemento.className="error";
                }else{
                    elemento.className="input";
                }
            } 
            
            // function validar(elemento){
            //     if(elemento.value.length < 9){
            //         var data = elemento.className='error';
            //     }else{
            //         elemento.className='input';
            //     }
            // }

            // function validarPass(elemento){
            //     if(elemento.value.length < 6){
            //         var data = elemento.className='error';
            //     }else{
            //         elemento.className='input';
            //     }
            // }
    
            function validarLong(elemento,min){
                if(elemento.value==''){
                    var data = elemento.value;
                    if(data.length<min){
                        elemento.className='error';
                    }else{
                        elemento.className='input';
                    }
                }
            }
    
            
        </script>

</html>