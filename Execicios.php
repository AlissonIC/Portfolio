<!DOCTYPE html>
<html>
<head>
	<title>Exercicios</title>
</head>
<body>
	<form action="/Execicios.php" method="post">
		Escreva algo:<br>
		<input type="" name="text">
		<input type="submit" name="">
	</form>
	<?php
		echo "Oque voce escreveu: <br>", htmlspecialchars($_POST['text']);
	?>
</body>
</html>