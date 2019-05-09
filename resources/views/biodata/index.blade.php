@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Lista De Biodata De Estudiantes</h3>
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="{{ route('biodata.create') }}">Crear Nueva Biodata</a>
			</div>
		</div>
		@if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{$message}}</p>
			</div>
		@endif
		<table class="table table-hover table-sm">
			<tr>
			<th width="50px"><b>No. </b></th>
			<th width="300px">Nombre Estudiante</th>
			<th>Dirección Estudiante</th>
			<th width="240px">Acción</th>
			</tr>
			@foreach ($biodatas as $biodata)
				<tr>
					<td><b>{{++$i}}.</b></td>
					<td>{{$biodata->nombreEst}}</td>
					<td>{{$biodata->direccionEst}}</td>
					<td>
						<form action="{{ route('biodata.destroy', $biodata->id) }}" method="post">
							<a class="btn btn-sm btn-success" href="{{route('biodata.show', $biodata->id)}}">Mostrar</a>
							<a class="btn btn-sm btn-warning" href="{{route('biodata.edit', $biodata->id)}}">Editar</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</table>
		{!! $biodatas->links() !!}
	</div>
@endsection