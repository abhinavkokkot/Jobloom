
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
    <?php if (isset($_SESSION['username'])): ?>

    <nav>
        <a href="index.php">
            <img src="" alt="">
        </a>


        <a href="index.php">HOME</a>
        <a href="">track application</a>
        <a href="">message</a>
        <a href="">availability</a>


        <a href="profile.php">profile</a>
        <a href="logout.php">logout</a>
    </nav>

    
        
        <h2> logged in user: <?php echo $_SESSION['username'];?> </h2>

    <?php else: ?>
        <h2>
            
            <a href="login.php">login</a>
            <a href="register.php">signup</a>
        </h2>

    <?php endif; ?>

</body>
</html>
