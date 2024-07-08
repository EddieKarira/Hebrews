<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM users WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
</head>
<body>
    <form method="post" action="">
        ID: <input type="text" name="id"><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>
