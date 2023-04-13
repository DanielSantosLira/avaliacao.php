<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		.hero-image {
			width: 300px;
			height: 300px;
			background-repeat: no-repeat;
			background-position: center;
			background-size: contain;
		}
		#superman {
			background-image: url(img/superman.png);
		}
		#batman {
			background-image: url(img/batman.png);
		}
		#wonder-woman {
			background-image: url(img/america.png);
		}
		#spider-man {
			background-image: url(img/ironman.png);
		}
		
	</style>
</head>

<body>
<form method="post">
		<label for="hero">Escolha um herói:</label><br><br>
		<select name="hero" id="hero">
			<option value="superman">Superman</option>
			<option value="batman">Batman</option>
			<option value="homem-ferro">Homem de Ferro</option>
			<option value="captain-america">Captain America</option>
		</select><br><br>
		<button type="submit">Enviar</button>
	</form>
</body>

</html>