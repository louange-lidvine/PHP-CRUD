<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
	<fieldset>
    <div class="container">
        <h2>Signup Form</h2>
        <form action="create.php" method="post">
            <div class="form-group">
                <label for="first_name">First Name:</label><br>
                <input type="text" id="first_name" name="fname" required><br>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label><br>
                <input type="text" id="last_name" name="lname" required><br>
            </div>

            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
            </div>

            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label><br>
                <input type="radio" id="gender" name="GENDER" value="male" >
                <label for="male">Male</label>
                <input type="radio" id="gender" name="GENDER" value="female">
                <label for="female">Female</label><br>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="submit">
            </div>
			</fieldset>
        </form>
    </div>
</body>
</html>
