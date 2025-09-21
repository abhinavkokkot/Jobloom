
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>home page</h1>

    <?php if (isset($_SESSION['username'])): ?>
        
        <h2> logged in user: <?php echo $_SESSION['username'];?> </h2>

    <?php else: ?>
        <h2>
            <a href="login.php">login</a>
            
            <a href="register.php">signup</a>
        </h2>

    <?php endif; ?>

</body>
</html>
