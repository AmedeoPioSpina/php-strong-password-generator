<?php 
    function passwordGen($count){
        $password = "";
        for($i = 0; $i < $count; $i++){
            $asciiCode = rand(33, 126);
            $stringConverter = chr($asciiCode);
            $password .= $stringConverter;
        };
        echo $password;
    }
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