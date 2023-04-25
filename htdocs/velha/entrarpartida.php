<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Entrar Em Partida</title>
</head>
<body>
	<h1>Entrar Em Partida</h1>
	<form action="entrarpartida.php" method="POST">
		<label for="apelido">Apelido</label>
		<input type="text" name="apelido" minlength="1" maxlength="20" required>
		<br>
		<label for="codigo">Código</label>
		<input type="text" name="codigo" minlength="4" maxlength="4" required>
		<br>
		<input type="submit" value="Jogar">
	</form>
</body>
</html>