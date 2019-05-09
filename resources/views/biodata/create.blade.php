@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Nueva Biodata De Estudiante</h3>
		</div>
	</div>
	@if ($errors->any())
		<div class="alert alert-danger">
			<strong>Whoops!</strong> Ocurrieron algunos problemas con los datos introducidos.<br>
			<ul>
				@foreach ($errors as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{route('biodata.store')}}" method="post">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<strong>Nombre De Estudiante:</strong>
				<input type="text" name="nombreEst" class="form-control" placeholder="Nombre Estudiante"></input>
			</div>
			<div class="col-md-12">
				<strong>Dirección De Estudiante:</strong>
				<textarea class="form-control" placeholder="Direccion Estudiante" name="direccionEst" rows="8" cols="80"></textarea>
			</div>
			<div class="col-md-12">
				<a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Atrás</a>
				<button type="submit" class="btn btn-sm btn-primary">Enviar</button>
			</div>
		</div>
	</form>
</div>
@endsection