<?php
include 'connection.php';

if(isset($_POST['submit'])){
  
    $email = $_POST['email'];
    $password = sha1($_POST['password']); // or you can replace sha1 by MD5 for hashing password
 $result=$conn->query("SELECT * FROM users WHERE
 email='$email' AND password='$password' ");
if(!$result){
  echo "Error: " . $sql . "<br>" . $mysql->error;    
  exit();
}
if($result->num_rows > 0){
    session_start();
    $_SESSION["email"]=$email;
    header("Location:display.php");
    exit();
}else{
    echo "invalid username or password.";
}

}
?>
