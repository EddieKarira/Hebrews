<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - heBrews Coffee Shop</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="main-content">
        <h2>Login to Your Account</h2>
        <form method="post" action="connection.php">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
<?php include 'footer.php'; ?>
</body>
</html>
