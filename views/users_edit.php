<h2>Usuários - Editar</h2>

<?php if(isset($error_msg) && !empty($error_msg)): ?>
	<div class="alert alert-warning"><i class="fas fa-exclamation-circle"></i><?php echo $error_msg; ?></div>
<?php endif; ?>


<form method="POST">
	
		<div class="form-group row col-3">
			<label for="email">E-mail:</label>
			<input type="email" name="email" class="form-control" id="email" value="<?php echo $user_info['email']; ?>" disabled>
		</div>
		<div class="form-group row col-3">
			<label for="password">Senha:</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>
		<div class="form-group row col-3">
			<label for="group">Grupos:</label>
			<select class="form-control" name="group" id="group" required>
				<?php foreach($group_list as $g): ?>
					<option value="<?php echo $g['id']; ?>"<?php echo ($g['id']==$user_info['id_group'])?'selected="selected"':'';?>><?php echo $g['name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	

	<button type="submit" class="btn btn-success">Editar</button>
	
</form>



