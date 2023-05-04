
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
	<fieldset>
    <div class="container">
        <h2>Login form</h2>
        <form action="loged.php" method="post">
           

            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br>
            </div>

            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="submit">
            </div>
			</fieldset>
        </form>
    </div>
</body>
</html>

