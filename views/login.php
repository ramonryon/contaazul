<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/login.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="loginarea">
		<form method="POST">
			<input type="email" name="email" placeholder="E-mail" required>
			<input type="password" name="password" placeholder="Senha" required>
			<input type="submit" value="Entrar"><br>
			<?php if(isset($error) && !empty($error)): ?>
				<div class="alert alert-danger">
					<?php echo $error; ?>
				</div>
			<?php endif; ?>
		</form>
	</div>

</body>
</html>