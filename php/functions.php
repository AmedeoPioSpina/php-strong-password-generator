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