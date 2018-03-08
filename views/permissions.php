<h2>Permissões</h2>

<div class="tabarea">
	<div class="tabitem activetab">Grupos de permissões</div>
	<div class="tabitem">Permissões</div>
</div>

<div class="tabcontent">
	<div class="tabbody" style="display: block;">
		<a class="btn btn-primary btn-add" href="<?php echo BASE_URL; ?>permissions/add_group"><i class="fas fa-plus"></i>Adicionar Grupo de Permissões</a>
		
		<table border="1" width="100%">
			<thead>
				<tr>
					<th class="text-left">Nome do Grupo de Permissões</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($permissions_groups_list as $p): ?>
					<tr>
						<td><?php echo $p['name'] ?></td>
						<td class="text-center" width="100">
							<a class="btn btn-warning btn-sm" href="<?php echo BASE_URL; ?>permissions/edit_group/<?php echo $p['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
							<a class="btn btn-danger btn-sm" onclick="confirm('Tem certeza que deseja deletar?')" href="<?php echo BASE_URL; ?>permissions/delete_group/<?php echo $p['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			
		</table>
	</div>
	<div class="tabbody">

		<a class="btn btn-primary btn-add" href="<?php echo BASE_URL; ?>permissions/add"><i class="fas fa-plus"></i>Adicionar Permissão</a>
		
		<table border="1" width="100%">
			<thead>
				<tr>
					<th class="text-left">Nome da Permissão</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($permissions_list as $p): ?>
					<tr>
						<td><?php echo $p['name'] ?></td>
						<td class="text-center" width="50"><a class="btn btn-danger btn-sm" onclick="confirm('Tem certeza que deseja deletar?')" href="<?php echo BASE_URL; ?>permissions/delete/<?php echo $p['id']; ?>"><i class="far fa-trash-alt"></i></a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			
		</table>
		
	</div>
</div>