<h2>Permissão - Adicionar Grupo de Permissões</h2>

<form method="POST">
	
	<div class="form-group row col-4">
		<label for="name">Nome do Grupo de Permissões:</label>
		<input type="text" name="name" class="form-control" id="name" placeholder="Nome do Grupo de Permissões">
	</div>

		<label for="name">Permissões:</label>
		<?php foreach($permissions_list as $p): ?>
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="permissions[]" value="<?php echo $p['id']; ?>"> <?php echo $p['name']; ?> 
				</label>
			</div>
		<?php endforeach; ?>
	
	
	<button type="submit" class="btn btn-success">Adicionar</button>

</form>

