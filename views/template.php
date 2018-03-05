<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Painel - <?php echo $viewData['company_name']; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" media="screen,projection" />
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" media="screen,projection" />
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/template.css" media="screen,projection" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

	<div class="leftmenu">
		<div class="company_name">
			<?php echo $viewData['company_name']; ?>
		</div>
	</div>
	<div class="conteudo">
		<div class="top">

			<div class="top_right">
				<a href="<?php echo BASE_URL.'login/logout'; ?>">Sair</a>
			</div>

			<div class="top_right">
				<?php echo $viewData['user_email']; ?>
			</div>

		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>

</html>