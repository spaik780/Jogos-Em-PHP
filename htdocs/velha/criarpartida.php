<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Criar Partida</title>
</head>
<body>
	<h1>Criar Partida</h1>
	<form action="criarpartida.php" method="POST">
		<label for="apelido">Apelido</label>
		<input type="text" name="apelido" minlength="1" maxlength="20" required>
		<br>
		<input type="submit" value="Jogar">
	</form>
</body>
</html>