<h2>Clientes</h2>
<div class="row line-buttons">
	<div class="col-sm-4">
		<?php if($edit_permission): ?>
			<a class="btn btn-primary btn-add" href="<?php echo BASE_URL; ?>clients/add">
				<i class="fas fa-plus"></i>Adicionar Clientes
			</a>
		<?php endif; ?>
	</div>
	<div class="col-sm-4">
		<div class="input-group">
			<input type="text" class="form-control" id="busca" placeholder="Buscar..." data-type="search_clients">
			<span class="input-group-btn">
				<button class="btn btn-search"><i class="fas fa-search"></i></button>
			</span>
		</div>
	</div>
</div>


<table border="1" width="100%">
	<thead>
		<tr>
			<th class="text-left">Nome</th>
			<th class="text-left">Telefone</th>
			<th class="text-left">Cidade</th>
			<th>Estrelas</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($clients_list as $c): ?>
			<tr>
				<td><?php echo $c['name']; ?></td>
				<td><?php echo $c['phone']; ?></td>
				<td><?php echo $c['address_city']; ?></td>
				<td class="text-center" width="100"><?php echo $c['stars']; ?></td>
				<td class="text-center" width="100">
					<?php if($edit_permission): ?>
						<a class="btn btn-warning btn-sm" href="<?php echo BASE_URL; ?>clients/edit/<?php echo $c['id']; ?>">
							<i class="fas fa-pencil-alt"></i>
						</a>
						<a class="btn btn-danger btn-sm" onclick="excluirCli('<?php echo $c['id']; ?>')" href="javascript:;">
							<i class="far fa-trash-alt"></i>
						</a>
					<?php else: ?>
						<a class="btn btn-primary btn-sm" href="<?php echo BASE_URL; ?>clients/view/<?php echo $c['id']; ?>">
							<i class="fas fa-eye"></i>
						</a>
					<?php endif; ?>
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

<nav aria-label="Page navigation example">
	<ul class="pagination">
		<?php for($q=1; $q<=$p_count; $q++): ?>
			<li class="page-item <?php echo ($q==$p)?'active':''; ?>"><a class="page-link" href="<?php echo BASE_URL; ?>clients?p=<?php echo $q; ?>"><?php echo $q?></a></li>
		<?php endfor; ?>
	</ul>
</nav>
