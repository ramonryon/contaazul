<h2>Estoque - Adicionar</h2>

<?php if(isset($error_msg) && !empty($error_msg)): ?>
	<div class="alert alert-warning"><i class="fas fa-exclamation-circle"></i><?php echo $error_msg; ?></div>
<?php endif; ?>


<form method="POST">

	
	<div class="form-group row col-sm-4">
		<label for="name"><strong>Nome:</strong></label>
		<input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
	</div>
	<div class="form-group row col-sm-4">
		<label for="price"><strong>Preço:</strong></label>
		<input type="text" name="price" class="form-control" id="price" required>
	</div>
	<div class="form-group row col-sm-4">
		<label for="quant"><strong>Quantidade em Estoque:</strong></label>
		<input type="number" name="quant" class="form-control" id="quant" placeholder="Quantidade em Estoque" required>
	</div>
	<div class="form-group row col-sm-4">
		<label for="_min_quant"><strong>Quantidade mínima em Estoque:</strong></label>
		<input type="number" name="_min_quant" class="form-control" id="_min_quant" placeholder="Quantidade mínima em Estoque" required>
	</div>
	
	
	<button type="submit" class="btn btn-success">Adicionar</button>
	
</form>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_inventory_add.js"></script>



