<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ERP conta azul - Login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" media="screen,projection" />
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/login.css" media="screen,projection" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>