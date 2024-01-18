<?php 
    include __DIR__ . '/php/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="password_length"></label>
        <input type="text" name="password_length">
        <button type="submit">Gen</button>
    </form>
<?php if(isset($_GET["password_length"])){ ?>
    <p>
        <?php
            echo passwordGen($_GET["password_length"]);
        ?>
    </p>
<?php }?>
</body>
</html>