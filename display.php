<?php
include 'connection.php';
?>
<!DOCTYPE html>

<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5 "><a href="signup.php"  class="text-light">Add user</a></button>
        <table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">fname</th>
      <th scope="col">lname</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $data="SELECT * FROM users";
    $result=mysqli_query($conn,$data);
    if($result){
     
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $gender=$row['GENDER'];
            echo "<tr>
            <th scope='row'>$fname</th>
            <td>$lname</td>    
            <td>$email</td> 
            <td>$gender</td> 
          <td>
        <a href='updateform.php?id=$id' class='btn btn-primary btn-sm'>Update</a>
                <a href='delete.php?id=$id' class='btn btn-danger btn-sm'>Delete</a>
                  <a href='pdf.php' class='btn btn-primary btn-sm'>Export</a>
                <a href='csv.php' class='btn btn-danger btn-sm'>CSV</a>
              
      
            </td>
            </tr>";
        }
    }
    ?>
 
  </tbody>
</table>
    </div>
    
</body>
</html>
