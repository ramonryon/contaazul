<h2>Usuários - Adicionar</h2>

<form method="POST">
	
		<div class="form-group row col-3">
			<label for="email">E-mail:</label>
			<input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
		</div>
		<div class="form-group row col-3">
			<label for="password">Senha:</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Senha">
		</div>
		<div class="form-group row col-3">
			<label for="group">Grupos:</label>
			<select class="form-control" name="group" id="group">
				<?php foreach($group_list as $g): ?>
					<option value="<?php echo $g['id']; ?>"><?php echo $g['name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	

	<button type="submit" class="btn btn-success">Adicionar</button>
	
</form>



