<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "<h1>Faça um programa que exiba todos os números ímpares entre 21 e 80.</h1>";
    $numero = 21;


    while ($numero <= 80) {
        if ($numero % 2 == 1){
           
            echo $numero . "<br>";
        }
        $numero++;
        
    }

    ?>
</body>
</html>