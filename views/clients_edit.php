<h2>Clientes - Editar</h2>

<?php if(isset($error_msg) && !empty($error_msg)): ?>
	<div class="alert alert-warning"><i class="fas fa-exclamation-circle"></i><?php echo $error_msg; ?></div>
<?php endif; ?>

<form method="POST">

	<div class="row">
		<div class="form-group col-sm-4">
			<label for="name"><strong>Nome:</strong></label>
			<input type="text" name="name" class="form-control" id="name" value="<?php echo $client_info['name'];?>" required>
		</div>
		<div class="form-group col-sm-4">
			<label for="email"><strong>E-mail:</strong></label>
			<input type="email" name="email" class="form-control" value="<?php echo $client_info['email'];?>" id="email">
		</div>
		<div class="form-group col-sm-4">
			<label for="phone"><strong>Telefone:</strong></label>
			<input type="text" name="phone" class="form-control" value="<?php echo $client_info['phone'];?>" id="phone">
		</div>
		<div class="form-group col-sm-4">
			<label for="stars"><strong>Estrelas:</strong></label>
			<select name="stars" id="stars" class="form-control" required>
				<option value="1" <?php echo ($client_info['stars']=='1')?'selected="selected"':''; ?>>1 Estrela</option>
				<option value="2"<?php echo ($client_info['stars']=='2')?'selected="selected"':''; ?>>2 Estrela</option>
				<option value="3" <?php echo ($client_info['stars']=='3')?'selected="selected"':''; ?>>3 Estrela</option>
				<option value="4" <?php echo ($client_info['stars']=='4')?'selected="selected"':''; ?>>4 Estrela</option>
				<option value="5" <?php echo ($client_info['stars']=='5')?'selected="selected"':''; ?>>5 Estrela</option>
			</select>
		</div>
		<div class="form-group col-sm-8">
			<label for="internal_obs"><strong>Observações Internas:</strong></label>
			<textarea name="internal_obs" id="internal_obs" class="form-control" rows="5" ><?php echo $client_info['internal_obs'];?></textarea>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-4">
			<label for="address_zipcode"><strong>CEP:</strong></label>
			<input type="text" name="address_zipcode" class="form-control" id="address_zipcode" value="<?php echo $client_info['address_zipcode'];?>">
		</div>
		<div class="form-group col-sm-4">
			<label for="address"><strong>Rua:</strong></label>
			<input type="text" name="address" class="form-control" id="address" value="<?php echo $client_info['address'];?>">
		</div>
		<div class="form-group col-sm-4">
			<label for="address_number"><strong>Número:</strong></label>
			<input type="text" name="address_number" class="form-control" id="address_number" value="<?php echo $client_info['address_number'];?>">
		</div>
		<div class="form-group col-sm-4">
			<label for="address2"><strong>Complemento:</strong></label>
			<input type="text" name="address2" class="form-control" id="address2" value="<?php echo $client_info['address2'];?>">
		</div>
		<div class="form-group col-sm-4">
			<label for="address_neighb"><strong>Bairro:</strong></label>
			<input type="text" name="address_neighb" class="form-control" id="address_neighb" value="<?php echo $client_info['address_neighb'];?>">
		</div>
		<div class="form-group col-sm-4">
			<label for="address_city"><strong>Cidade:</strong></label>
			<input type="text" name="address_city" class="form-control" id="address_city" value="<?php echo $client_info['address_city'];?>">
		</div>
		<div class="form-group col-sm-4">
			<label for="address_state"><strong>Estado:</strong></label>
			<input type="text" name="address_state" class="form-control" id="address_state" value="<?php echo $client_info['address_state'];?>">
		</div>

		<div class="form-group col-sm-4">
			<label for="address_country"><strong>País:</strong></label>
			<input type="text" name="address_country" class="form-control" id="address_country" value="<?php echo $client_info['address_country'];?>">
		</div>
	</div>
	
	<button type="submit" class="btn btn-success">Salvar</button>
	
</form>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_clients.js"></script>



