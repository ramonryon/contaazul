<h2>Clientes - Adicionar</h2>

<?php if(isset($error_msg) && !empty($error_msg)): ?>
	<div class="alert alert-warning"><i class="fas fa-exclamation-circle"></i><?php echo $error_msg; ?></div>
<?php endif; ?>


<form method="POST">

	<div class="row">
		<div class="form-group col-sm-4">
			<label for="name"><strong>Nome:</strong></label>
			<input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
		</div>
		<div class="form-group col-sm-4">
			<label for="email"><strong>E-mail:</strong></label>
			<input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
		</div>
		<div class="form-group col-sm-4">
			<label for="phone"><strong>Telefone:</strong></label>
			<input type="text" name="phone" class="form-control" id="phone" placeholder="Telefone">
		</div>
		<div class="form-group col-sm-4">
			<label for="stars"><strong>Estrelas:</strong></label>
			<select name="stars" id="stars" class="form-control" required>
				<option value="1">1 Estrela</option>
				<option value="2">2 Estrela</option>
				<option value="3" selected="selected">3 Estrela</option>
				<option value="4">4 Estrela</option>
				<option value="5">5 Estrela</option>
			</select>
		</div>
		<div class="form-group col-sm-8">
			<label for="internal_obs"><strong>Observações Internas:</strong></label>
			<textarea name="internal_obs" id="internal_obs" class="form-control" rows="5" placeholder="Observações Internas"></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-4">
			<label for="address_zipcode"><strong>CEP:</strong></label>
			<input type="text" name="address_zipcode" class="form-control" id="address_zipcode" placeholder="CEP">
		</div>
		<div class="form-group col-sm-4">
			<label for="address"><strong>Rua:</strong></label>
			<input type="text" name="address" class="form-control" id="address" placeholder="Rua">
		</div>
		<div class="form-group col-sm-4">
			<label for="address_number"><strong>Número:</strong></label>
			<input type="text" name="address_number" class="form-control" id="address_number" placeholder="Número">
		</div>
		<div class="form-group col-sm-4">
			<label for="address2"><strong>Complemento:</strong></label>
			<input type="text" name="address2" class="form-control" id="address2" placeholder="Número">
		</div>
		<div class="form-group col-sm-4">
			<label for="address_neighb"><strong>Bairro:</strong></label>
			<input type="text" name="address_neighb" class="form-control" id="address_neighb" placeholder="Bairro">
		</div>
		<div class="form-group col-sm-4">
			<label for="address_city"><strong>Cidade:</strong></label>
			<input type="text" name="address_city" class="form-control" id="address_city" placeholder="Cidade">
		</div>
		<div class="form-group col-sm-4">
			<label for="address_state"><strong>Estado:</strong></label>
			<input type="text" name="address_state" class="form-control" id="address_state" placeholder="Estado">
		</div>

		<div class="form-group col-sm-4">
			<label for="address_country"><strong>País:</strong></label>
			<input type="text" name="address_country" class="form-control" id="address_country" placeholder="País">
		</div>
	</div>
	
	<button type="submit" class="btn btn-success">Adicionar</button>
	
</form>


<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_clients_add.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_clients.js"></script>


