<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$car->id}}">
	<form action="{{action('CargoController@destroy', $car->id)}}" method="post" accept-charset="utf-8">
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Eliminar Cargo</h4>
				</div>
				<div class="modal-body">
					<p>Confirme si desea eliminar el cargo</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			</div>
		</div>
	</form>
</div>