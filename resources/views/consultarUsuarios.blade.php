
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
				<th>Evolución anterior</th>
				<th>Altura</th>
				<th>Peso</th>
				<th>Rate</th>
				<th>Generacion</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pokemons as $u)
				<tr ><a href="{{url('/consultarPerfil')}}/{{$u->id}}"></a>
					<!--href="{{url('/consultarPerfil')}}/{{$u->id}}"-->
				
					<td>{{$u->id}}</td>
					<td>

					<img src="images/icons/{{$u->codeicon}}.png" >
					
					</td>

					<td>{{$u->name}}</td>
					@if($u->type1 == "") <td></td>
					@elseif($u->type1 == 1)
						<td><a href="#" class="btn btn-dafault">Normal</a></td>
					@elseif ($u->type1 == 2)
						<td><a href="#" class="btn btn-default">Lucha</a></td>
					@elseif ($u->type1 == 3)
						<td><a href="#" class="btn btn-default">Volador</a></td>
					@elseif ($u->type1 == 4)
						<td><a href="#" class="btn btn-info">Veneno</a></td>
					@elseif ($u->type1 == 5)
						<td><a href="#" class="btn btn-default">Tierra</a></td>
					@elseif ($u->type1 == 6)
						<td><a href="#" class="btn btn-default">Roca</a></td>
					@elseif ($u->type1 == 7)
						<td><a href="#" class="btn btn-default">Bicho</a></td>
					@elseif ($u->type1 == 8)
						<td><a href="#" cl9ass="btn btn-default">Fantasma</a></td>
					@elseif ($u->type1 == 9)
						<td><a href="#" class="btn btn-default">Acero</a></td>
					@elseif ($u->type1 == 10)
						<td><a href="#" class="btn btn-danger">Fuego</a></td>
					@elseif ($u->type1 == 11)
						<td><a href="#" class="btn btn-primary">Agua</a></td>
					@elseif ($u->type1 == 12)
						<td><a href="#" class="btn btn-success">Planta</a></td>
					@elseif ($u->type1 == 13)
						<td><a href="#" class="btn btn-default">Eléctrico</a></td>
					@elseif ($u->type1 == 14)
						<td><a href="#" class="btn btn-default">Psíquico</a></td>
					@elseif ($u->type1 == 15)
						<td><a href="#" class="btn btn-default">Hielo</a></td>
					@elseif ($u->type1 == 16)
						<td><a href="#" class="btn btn-warning">Dragón</a></td>
					@elseif ($u->type1 == 17)
						<td><a href="#" class="btn btn-default">Siniestro</a></td>
					@elseif ($u->type1 == 10001)
						<td><a href="#" class="btn btn-default">Desconocido</a></td>
					@endif	
					@if($u->type2 == "")	
					<td></td>				
					@elseif($u->type2 == 1)
						<td><a href="#" class="btn btn-dafault">Normal</a></td>
					@elseif ($u->type2 == 2)
						<td><a href="#" class="btn btn-default">Lucha</a></td>
					@elseif ($u->type2 == 3)
						<td><a href="#" class="btn btn-default">Volador</a></td>
					@elseif ($u->type2 == 4)
						<td><a href="#" class="btn btn-info">Veneno</a></td>
					@elseif ($u->type2 == 5)
						<td><a href="#" class="btn btn-default">Tierra</a></td>
					@elseif ($u->type2 == 6)
						<td><a href="#" class="btn btn-default">Roca</a></td>
					@elseif ($u->type2 == 7)
						<td><a href="#" class="btn btn-default">Bicho</a></td>
					@elseif ($u->type2 == 8)
						<td><a href="#" cl9ass="btn btn-default">Fantasma</a></td>
					@elseif ($u->type2 == 9)
						<td><a href="#" class="btn btn-default">Acero</a></td>
					@elseif ($u->type2 == 10)
						<td><a href="#" class="btn btn-danger">Fuego</a></td>
					@elseif ($u->type2 == 11)
						<td><a href="#" class="btn btn-primary">Agua</a></td>
					@elseif ($u->type2 == 12)
						<td><a href="#" class="btn btn-success">Planta</a></td>
					@elseif ($u->type2 == 13)
						<td><a href="#" class="btn btn-default">Eléctrico</a></td>
					@elseif ($u->type2 == 14)
						<td><a href="#" class="btn btn-default">Psíquico</a></td>
					@elseif ($u->type2 == 15)
						<td><a href="#" class="btn btn-default">Hielo</a></td>
					@elseif ($u->type2 == 16)
						<td><a href="#" class="btn btn-warning">Dragón</a></td>
					@elseif ($u->type2 == 17)
						<td><a href="#" class="btn btn-default">Siniestro</a></td>
					@elseif ($u->type2 == 10001)
						<td><a href="#" class="btn btn-default">Desconocido</a></td>
					@endif	

				<!--	<td>{{$u->envolves_from}} </td> -->
				<td></td>

					<td>{{$u->height}} Pulgadas</td>
					<td>{{$u->weight}} Kg</td>
					<td>{{$u->capture_rate}}</td>
					<td>{{$u->generation}}</td>
					<td><a href="{{url('/consultarPerfil')}}/{{$u->id}}" class="btn btn-primary">Detalle</a></td>
		
				</tr>
			@endforeach
		</tbody>
	</table>
@stop





