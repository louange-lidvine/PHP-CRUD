<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    
      <?php 
        include "connection.php";
        $id=$_GET['id']; 
        session_start();
        $_SESSION['id']=$id;
        
      

        $sql="SELECT * FROM `users` WHERE id=$id";
        $result=$conn->query($sql);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data = $row;
                break;
            }
        }

        ?>
    <!-- <div class="container"> -->
       <fieldset>
    <div class="container">
        <h2>Update Form</h2>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="first_name">First Name:</label><br>
                <input type="text" id="first_name" name="fname" value="<?php  echo $data['fname'] ?>" required><br>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label><br>
                <input type="text" id="last_name" name="lname" value="<?php  echo $data['lname'] ?>" required><br>
            </div>

            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?php  echo $data['email'] ?>" required><br>
            </div>

            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label><br>
                 <label for="male">Male</label>
                <input type="radio" id="gender" name="GENDER"   value="male" <?php if($data['GENDER'] =="male" ){
                    echo "checked";
                }
        
        ?>
                >
                  <label for="female">Female</label>
                <input type="radio" id="gender" name="GENDER"  value="female"<?php  if($data['GENDER'] =="female" ){
                    echo "checked";
                }  ?>>
               
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="submit">
                <button ><a href="login.php">Login</a></button>
            </div>
			</fieldset>
        </form>
    </div>
</body>
</html>
