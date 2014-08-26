<div class="row">
<?php foreach ($entries as $entry): ?>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<div style="min-height:213px">
					<h2 class="text-center"><a href="<?= site_url('blog/entries/get_entry') ?>/<?= $entry['id'] ?>"><?= character_limiter($entry['title'],38) ?></a></h2>
					<p class="text-center text-muted"><?= date('d-m-Y H:m:s', strtotime($entry['date'])) ?></p>
					<p class="text-justify"><?= character_limiter($entry['content'],500) ?></p>
				</div>
				<p class="text-right"><a class="btn btn-default" href="<?= site_url('blog/entries/get_entry') ?>/<?= $entry['id'] ?>" role="button">Ver detalles &raquo;</a></p>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>