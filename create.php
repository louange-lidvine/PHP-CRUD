<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']); // or you can replace sha1 by MD5 for hashing password
    $GENDER = $_POST['GENDER'];

    $sql = "INSERT INTO users (fname, lname, email, password, GENDER) VALUES ('$fname', '$lname', '$email', '$password', '$GENDER')";

    if($conn->query($sql)){
        // echo "New record created successfully";
        header('Location: display.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// if(isset($_POST['submit'])){
// echo "Fine";
// }
// else{
//     echo "not";
// }
?>
