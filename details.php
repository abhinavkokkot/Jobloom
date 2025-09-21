<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: details.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choice</title>
</head>
<body>
    
    <h2>welcome,<?php echo $_SESSION['username']; ?></h2>
    
    <form action="POST" action="save_details.php">
        <h3>LOCATION</h3>
        Country: <input type="text" name="country"><br>
        State: <input type="text" name="state"><br>
        District: <input type="text" name="district"><br>

        <h3>Age:</h3>
        <select name="age">
            <?php for ($i = 18; $i <= 25; $i++) {
                echo "<option value='$i'>$i</option>";
            } ?>
        </select><br>

        <h3>Gender:</h3>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female <br>

        <h3>Type:</h3>
        <input type="checkbox" name="type[]" value="offline"> Offline
        <input type="checkbox" name="type[]" value="online"> Online
        <input type="checkbox" name="type[]" value="hybrid"> Hybrid <br>

        <h3>Skills:</h3>
        <input type="text" name="skills" placeholder="Your skills..."><br><br>

        <button type="submit">Save Preferences</button>

    </form>

    <form action="GET" action="index.php" style="margin-top: 10px;">
        <button type="submit"> skip for now</button>
    </form>
</body>
</html>