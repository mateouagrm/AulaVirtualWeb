@extends ('layouts.inicio')
@section ('content')

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table id="requisitos" class="table table-striped table-bordered table-condensed table-hover">
					<thead style="background-color: #A9D0F5">
							<th>id</th>
							<th>Nombre</th>
							<th>id ciclo</th>
					</thead>
					<tbody>
						@foreach($requisitos as $req)
							<tr>
								<td>{{$req->id}}</td>
								<td>{{$req->nombre}}</td>
								<td>{{$req->id_ciclo}}</td>
							</tr>
						@endforeach	
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
