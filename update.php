<?php
include 'connection.php';
if(isset($_POST['submit'])){
     $id=$_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']); // or you can replace sha1 by MD5 for hashing password
    $GENDER = $_POST['GENDER'];

    $sql = "UPDATE users SET  fname= '$fname',lname='$lname',email= '$email',password= '$password' ,GENDER= '$GENDER' WHERE id='$id' ";
    if(mysqli_query($conn,$sql)){ 
        echo "Updated successfully";
        header('Location: display.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

        ?>
