<form class="form-horizontal" method="POST" action="<?= site_url('blog/entries/insert_entry')?>">
	<fieldset>
		<legend>Agregar entrada</legend>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="title">Título</label>
			<div class="col-sm-10">
				<input class="form-control " id="title" name="title" placeholder="Título de la entrada." required="" type="text">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label" for="content">Contenido</label>
			<div class="col-sm-10">                     
				<textarea class="form-control" rows="15" id="content" name="content" required=""></textarea>
			</div>
		</div>

		<div class="form-group pull-right">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn btn-success" type="submit">Guardar</button>
			</div>
		</div>
	</fieldset>
</form>