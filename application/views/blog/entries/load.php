<form class="form-horizontal" method="POST" action="<?= site_url('blog/entries/update_entry') ?>">
	<fieldset>
		<legend>Editar entrada</legend>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="title">Título</label>
			<div class="col-sm-10">
				<input type="hidden" name="id" value="<?= $entry['id'] ?>">
				<input class="form-control " id="title" name="title" placeholder="Título de la entrada." required="" type="text" required="" value="<?= $entry['title'] ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label" for="content">Contenido</label>
			<div class="col-sm-10">                     
				<textarea class="form-control" rows="15" id="content" name="content" required=""><?= $entry['content'] ?></textarea>
			</div>
		</div>

		<div class="form-group pull-right">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn btn-success" type="submit">Guardar</button>
			</div>
		</div>
	</fieldset>
</form>