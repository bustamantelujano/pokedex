
@extends('principal')

@section('encabezado')
	<h2>Consultar Pokemones</h2>
@stop

@section('contenido')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>icon</th>
				<th>Nombre</th>
				<th>Tipo 1</th>
				<th>Tipo 2</th>
				<th>Envolves From</th>
				<th>Altura</th>
				<th>Peso</th>
				<th>Rate</th>
				<th>Generacion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pokemons as $u)
				<tr>


					<td>{{$u->id}}</td>
					<td>

					<img src="images/icons/{{$u->codeicon}}.png" >
					
					</td>

					<td>{{$u->name}}</td>
					<td>{{$u->type1}}</td>
					<td>{{$u->type2}}</td>
					<td>{{$u->envolves_from}}</td>
					<td>{{$u->height}}</td>
					<td>{{$u->weight}}</td>
					<td>{{$u->capture_rate}}</td>
					<td>{{$u->generation}}</td>
					<td>
						<a href="{{url('/actualizarUsuario')}}/{{$u->id}}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true">Abrir</span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop








