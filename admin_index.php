<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script language="javascript" type="text/javascript">
   window.history.forward();
  </script>
  <title>ADMIN LOGIN</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap-responsive.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  

</head>
<body style="background-image: url('back1.jpg')" >

  <form action="admin_login.php" method="POST" >
    <h2>ADMIN LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
    <label >User Name</label>
    <input type="text" name="uname" placeholder="User Name"><br>

    <label >Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <button type="submit" name= "done">Login</button>
    
  </form><br><br>
</body>
</html>

