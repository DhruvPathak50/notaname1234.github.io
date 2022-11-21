<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script language="javascript" type="text/javascript">
    window.history.forward();
  </script>
  <title>REGISTRATION</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap-responsive.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  

</head>
<body style="background-image: url('back1.jpg')" >

  <form action="register.php" method="POST" >
    <h2>REGISTER</h2>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
      <p class="success"><?php echo $_GET['success']; ?></p>
      <?php } ?>

    <label >Enter Name</label>
    <input type="text" name="name" placeholder="Name"><br>

    <label >Create User Name</label>
    <input type="text" name="uname" placeholder="User Name"><br>

    <label >Create Password</label>
    <input type="password" name="password" placeholder="Password"><br>

   
    <button style="float: right;margin-right: 10px;" type="submit" name="done">Register</button>
    
  </form><br>
  <button  type="submit" onclick="window.location='index.php'">Back to Login Page</button>
  
</body>
</html>

