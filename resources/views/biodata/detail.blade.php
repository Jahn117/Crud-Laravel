@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Detalles Estudiante:</h3>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Nombre De Estudiante:</strong>{{$biodata->nombreEst}}
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Dirección De Estudiante:</strong>{{$biodata->direccionEst}}
				</div>
			</div>
			<div class="col-md-12">
				<a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Volver</a>
			</div>
		</div>
	</div>
@endsection