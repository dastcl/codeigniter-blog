<div class="panel panel-default">
	<div class="panel-body">
		<h3 class=""><?= $entry['title'] ?></h3>
		<p class="text-muted"><?= date('d-m-Y H:m:s', strtotime($entry['date'])) ?></p>
		<hr>
		<p class="text-justify"><?= $entry['content'] ?></p>
		<div class="panel-footer">
			<form class="col-lg-1 pull-right" method="POST" action="<?= site_url('blog/entries/delete_entry') ?>">
				<input type="hidden" name="id" value="<?= $entry['id'] ?>">
				<button type="submit" class="btn btn-danger pull-right">Eliminar</button>
			</form>
			<form class="col-lg-1 pull-right" method="POST" action="<?= site_url('blog/entries/load_entry') ?>">
				<input type="hidden" name="id" value="<?= $entry['id'] ?>">
				<button type="submit" class="btn btn-primary pull-right">Editar</button>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>


