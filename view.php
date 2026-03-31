<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<body>
    <h2>User List</h2>
    <ul>
    <?php
    $stmt = $pdo->query("SELECT * FROM users");
    while ($row = $stmt->fetch()) {
        echo "<li>" . htmlspecialchars($row['username']) . " (" . $row['email'] . ")</li>";
    }
    ?>
    </ul>
    <a href="index.php">Back to Home</a>
</body>
</html>