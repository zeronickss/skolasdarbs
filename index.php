<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<body>
    <h2>Add New User</h2>
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" name="submit">Save User</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO users (username, email) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['username'], $_POST['email']]);
        echo "<p>User added successfully!</p>";
    }
    ?>

    <hr>
    <a href="view.php">View All Users</a>
</body>
</html>