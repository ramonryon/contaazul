<h2>Usuários</h2>


<a class="btn btn-primary btn-add" href="<?php echo BASE_URL; ?>users/add">
	<i class="fas fa-plus"></i>Adicionar Usuário
</a>

<table border="1" width="100%">
	<thead>
		<tr>
			<th class="text-left">E-mail</th>
			<th class="text-left">Grupo de Permissões</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($users_list as $us): ?>
			<tr>
				<td><?php echo $us['email']; ?></td>
				<td><?php echo $us['name'] ?></td>
				<td class="text-center" width="100">
					<a class="btn btn-warning btn-sm" href="<?php echo BASE_URL; ?>users/edit/<?php echo $us['id']; ?>">
						<i class="fas fa-pencil-alt"></i>
					</a>
					<a class="btn btn-danger btn-sm" onclick="excluirUs('<?php echo $us['id']; ?>')" href="javascript:;">
						<i class="far fa-trash-alt"></i>
					</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<div class="modal fade" id="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				...
			</div>
		</div>
	</div>
</div>