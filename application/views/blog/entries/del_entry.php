<form class="form-horizontal" method="POST" action="<?= site_url('blog/entries/delete_entry') ?>">
	<fieldset>
		<legend>Eliminar entrada</legend>
		<div class="form-group">
			<label for="id" class="col-sm-2 control-label">ID</label>
			<div class="col-sm-10">			
				<input type="text" class="form-control" name="id" id="id" required="">
				<p class="help-block">Ingrese el ID de la entrada que desea eliminar.</p>
			</div>
		</div>
		<div class="form-group pull-right">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-danger" >Eliminar</button>
			</div>
		</div>
	</fieldset>
</form>