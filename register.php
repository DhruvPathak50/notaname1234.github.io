<?php 
session_start();
include 'db_conn.php';

function function_alert($message) {
      
  // Display the alert box 
  echo "<script>alert('$message');</script>";
}

if (isset($_POST['done'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


  $name = validate($_POST['name']);
  $uname = validate($_POST['uname']);
  $pass = validate($_POST['password']);
  
  if(empty($name)){
    header("Location: index2.php?error=Name is required");
    exit();
  }else if(empty($uname)){
    header("Location: index2.php?error=User Name is required");
    exit();
  }else if(empty($pass)){
    header("Location: index2.php?error=Password is required");
    exit();
  }else{
    // $name = $_POST['name'];
    // $uname = $_POST['uname'];
    // $pass = $_POST['password'];
    
    $sql = "insert into users(name,user_name,password) values('$name','$uname','$pass')";

    $result = mysqli_query($conn, $sql);
    if ($result) {

      header("Location: index2.php?success=Your account has been created successfully");

      exit();
    }else {
      header("Location: index2.php?error=unknown error occurred&$user_data");
      exit();
    }
  
    
  
    


    // if(mysqli_num_rows($result)===1){
    //   $row = mysqli_fetch_assoc($result);

    //   if($row['user_name'] === $uname && $row['password'] === $pass){
    //     $_SESSION['user_name'] = $row['user_name'];
    //     $_SESSION['name'] = $row['name'];
    //     $_SESSION['id'] = $row['id'];
    //     header("Location: home.php");
    //     exit();
        
    //   }else{
    //     header("Location: index2.php?error=Incorrect User name or password");
    //     exit();
    //   }
    // }else{
    //   header("Location: index2.php?error=Incorrect User name or password");
    //   exit();
    // }
  }

}


