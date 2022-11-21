<?php 
session_start();
include 'db_conn.php';

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



  $uname = validate($_POST['uname']);
  $pass = validate($_POST['password']);

  if(empty($uname)){
    header("Location:admin_index.php?error=User Name is required");
    exit();
  }else if(empty($pass)){
    header("Location: admin_index.php?error=Password is required");
    exit();
  }else{
    if($uname == "admin" && $pass == "admin"){
      header("Location: admin_home.php");
      exit();

    }else{
        header("Location: index.php?error=Incorrect Admin name or password");
        exit();
      
    }
  }

}
else{
  header("Location: admin_index.php");
  exit();
}


