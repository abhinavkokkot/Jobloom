<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "invalid username!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST">

        <input type="text" name="username" placeholder="name" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <button type="submit">Login</button>

    </form>
</body>
</html>
