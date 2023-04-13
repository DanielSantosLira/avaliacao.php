<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
		
</head>

<body>
<form method="post">
		<label for="hero">Sleciome o Heroi:</label><br><br>
		<select name="hero">
			<option value="superman">Superman</option>
			<option value="batman">Batman</option>
			<option value="homem-ferro">Homem de Ferro</option>
			<option value="captain-america">Captain America</option>
		</select><br><br>
		<button type="submit">Enviar</button>
	</form><br><br>

	<?php
    $hero = $_POST['hero'] ?? "";
    if($hero == "superman"){
        echo "<img width='150' src='superman.png'>";
    }else if($hero == "superman"){
        echo "<img width='150' src='superman.png'>";
    }
	if($hero == "batman"){
        echo "<img width='150' src='batman.png'>";
    }else if($hero == "batman"){
        echo "<img width='150' src='batman.png'>";
    }
	if($hero == "homem-ferro"){
        echo "<img width='150' src='ironman.png'>";
    }else if($hero == "homem-ferro"){
        echo "<img width='150' src='ironman.png'>";
    }
	if($hero == "captain-america"){
        echo "<img width='150' src='america.png'>";
    }else if($hero == "captain-america"){
        echo "<img width='150' src='america.png''>";
    }
    ?>
</body>

</html>