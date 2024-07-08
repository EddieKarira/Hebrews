<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up - heBrews Coffee Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="main-content">
        <h2>Create Your Account</h2>
        <form method="post" action="connection.php">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" name="signup" value="Sign Up">
        </form>
    </div>
<?php include 'footer.php'; ?>
</body>
</html>
