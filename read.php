<?php
include 'connection.php';

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Read Users</title>
</head>
<body>
    <h2>Users List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
