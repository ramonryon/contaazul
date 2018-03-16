<h2>Usuários - Adicionar</h2>

<?php if(isset($error_msg) && !empty($error_msg)): ?>
	<div class="alert alert-warning"><i class="fas fa-exclamation-circle"></i><?php echo $error_msg; ?></div>
<?php endif; ?>


<form method="POST">
	
		<div class="form-group row col-3">
			<label for="email"><strong>E-mail:</strong></label>
			<input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
		</div>
		<div class="form-group row col-3">
			<label for="password"><strong>Senha:</strong></label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Senha" required>
		</div>
		<div class="form-group row col-3">
			<label for="group"><strong>Grupos:</strong></label>
			<select class="form-control" name="group" id="group" required>
				<?php foreach($group_list as $g): ?>
					<option value="<?php echo $g['id']; ?>"><?php echo $g['name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	

	<button type="submit" class="btn btn-success">Adicionar</button>
	
</form>



