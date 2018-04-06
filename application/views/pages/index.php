<table class="table table-hover">
	<thead>
		<th>#</th>
		<th>Página</th>
		<th class="text-right">Ações</th>
	</thead>
	<tbody>
		<?php foreach ($pages as $page): ?>
		<tr>
			<td><?php echo $page->id; ?></td>
			<td><?php echo $page->title; ?></td>
			<td class="text-right">
				<a href="/pages/<?php echo $page->id; ?>" class="btn btn-xs btn-default">Ver</a>
				<a href="/pages/<?php echo $page->id; ?>" class="btn btn-xs btn-info">Editar</a>
				<form action="/pages/<?php echo $page->id; ?>/delete" method="post" style="display:inline-block">
					<input type="submit" class="btn btn-xs btn-danger" value="Remover">
				</form>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>