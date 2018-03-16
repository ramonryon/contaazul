<h2>Estoque</h2>
<div class="row line-buttons">
	<div class="col-sm-4">
		<?php if($edit_permission): ?>
			<a class="btn btn-primary btn-add" href="<?php echo BASE_URL; ?>inventory/add">
				<i class="fas fa-plus"></i>Adicionar Produto
			</a>
		<?php endif; ?>
	</div>
	<div class="col-sm-4">
		<div class="input-group">
			<input type="text" class="form-control" id="busca" placeholder="Buscar..." data-type="search_inventory">
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
			<th class="text-left">Preço</th>
			<th>Quantidade</th>
			<th>Quant. Mín.</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($inventory_list as $product): ?>
			<tr>
				<td><?php echo $product['name']; ?></td>
				<td>R$ <?php echo number_format($product['price'], 2); ?></td>
				<td class="text-center" width="100"><?php echo $product['quant']; ?></td>
				<td class="text-center" width="100"><?php echo $product['min_quant']; ?></td>
				<td class="text-center" width="100">
					<?php if($edit_permission): ?>
						<a class="btn btn-warning btn-sm" href="<?php echo BASE_URL; ?>inventory/edit/<?php echo $product['id']; ?>">
							<i class="fas fa-pencil-alt"></i>
						</a>
						<a class="btn btn-danger btn-sm" onclick="excluirInven('<?php echo $product['id']; ?>')" href="javascript:;">
							<i class="far fa-trash-alt"></i>
						</a>
					<?php else: ?>
						<a class="btn btn-primary btn-sm" href="<?php echo BASE_URL; ?>inventory/view/<?php echo $product['id']; ?>">
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

