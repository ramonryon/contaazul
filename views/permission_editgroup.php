<h2>Permissão - Editar Grupo de Permissões</h2>

<form method="POST">

	<div class="form-group row col-4">
		<label for="name">Nome do Grupo de Permissões:</label>
		<input type="text" name="name" value="<?php echo $group_info['name']; ?>" class="form-control" id="name" placeholder="Nome do Grupo de Permissões">
	</div>

	<label for="name">Permissões:</label>
	<?php foreach($permissions_list as $p): ?>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="permissions[]" value="<?php echo $p['id']; ?>" <?php echo (in_array($p['id'], $group_info['params']))?'checked=checked':'';  ?> /> <?php echo $p['name']; ?> 
			</label>
		</div>
	<?php endforeach; ?>

	<button type="submite" class="btn btn-success">Editar</button>

</form>

