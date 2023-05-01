<?php
include 'connection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);
    if($result ){
        echo 'deleted';
        header('location:display.php');
    }else{
       die(musqli_error($conn));
    }

}

?>
