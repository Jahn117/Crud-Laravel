@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Edición De Biodata De Estudiante</h3>
		</div>
	</div>
	@if ($errors->any())
		<div class="alert alert-danger">
			<strong>Ups!</strong> Ocurrieron algunos problemas con los datos introducidos.<br>
			<ul>
				@foreach ($errors as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{route('biodata.update', $biodata->id)}}" method="post">
		@csrf
		@method('PUT')
		<div class="row">
			<div class="col-md-12">
				<strong>Nombre De Estudiante:</strong>
				<input type="text" name="nombreEst" class="form-control" value="{{$biodata->nombreEst}}"></input>
			</div>
			<div class="col-md-12">
				<strong>Dirección De Estudiante:</strong>
				<textarea class="form-control" name="direccionEst" rows="8" cols="80">{{$biodata->direccionEst}}</textarea>
			</div>
			<div class="col-md-12">
				<a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Atrás</a>
				<button type="submit" class="btn btn-sm btn-primary">Enviar</button>
			</div>
		</div>
	</form>
</div>
@endsection