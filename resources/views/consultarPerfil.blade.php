@extends('principal')

@section('encabezado')
	<h2>Pokemon!!</h2>
@stop

@section('contenido')
	<form action="{{url('/consultarPerfil')}}/{{$user->id}}" method="GET">
		<input type="hidden" name="_token" value="{{csrf_token() }}">
		<div class="form-group">
			<label for="nombre">ID</label>
			<input type="text" class="form-control" name="nombre" required value="{{$user->id}}">
		</div>
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" class="form-control" name="nombre" required value="{{$user->name}}">
		</div>
		<div class="form-group">
			<label for="edad">Tipo 1</label>
			<input type="number" class="form-control" name="edad" required value="{{$user->type1}}">
		</div>
		<div class="form-group">
			<label for="edad">Tipo 2</label>
			<input type="number" class="form-control" name="edad" required value="{{$user->type1}}">
		</div>
		<div class="form-group">
			<label for="edad">Evolves</label>
			<input type="number" class="form-control" name="edad" required value="{{$user->evolves_from}}">
		</div>
		<div class="form-group">
			<label for="edad">Altura</label>
			<input type="number" class="form-control" name="edad" required value="{{$user->height}}">
		</div>
		<div class="form-group">
			<label for="edad">Peso</label>
			<input type="number" class="form-control" name="edad" required value="{{$user->weight}}">
		</div>
		<div class="form-group">
			<label for="edad">Rate</label>
			<input type="number" class="form-control" name="edad" required value="{{$user->capture_rate}}">
		</div>
		<div class="form-group">
			<label for="edad">Generación</label>
			<input type="number" class="form-control" name="edad" required value="{{$user->generation}}">
		</div>
		<input type="submit" class="btn btn-primary" value="Perfil">
		<a href="{{url('/consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
	</form>
@stop





