@extends('principal2')

@section('encabezado')
@stop

@section('contenido')

			<div class="parallax filter-gradient white" data-color="red">
				<a href=""></a>
                <div class= "container">
                    <div class="row">
                    	<div class="col-md-7  hidden-xs">
                            <div class="parallax-image">
                            <img class="img-responsive"
                             style="width: 90%; height: 90%"
                             src="{{asset("images/imageshd/$user->id.png")}}"  / >
                            </div>
                        </div>                          

                        <div class="col-md-5">
                            <div class="description text-center">
                                <h1><br></h1>
                                <br><br>
                                <h4><br> <br> </h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="description text-center">
                                <h1>{{$user->name}}</h1>
                                <br>
                                <h3>
                                	Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                	sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </h3>
                             
                            @if($user->type1 == "") 
                            <td></td>
                            @elseif($user->type1 == 1)
                                <td><a href="#" class="btn btn-dafault"><h1>Normal</h1></a></td>
                            @elseif ($user->type1 == 2)
                                <td><a href="#" class="btn btn-default"><h1>Lucha</h1></a></td>
                            @elseif ($user->type1 == 3)
                                <td><a href="#" class="btn btn-default"><h1>Volador</h1></a></td>
                            @elseif ($user->type1 == 4)
                                <td><a href="#" class="btn btn-info"><h1>Veneno</h1></a></td>
                            @elseif ($user->type1 == 5)
                                <td><a href="#" class="btn btn-default"><h1>Tierra</a></td>
                            @elseif ($user->type1 == 6)
                                <td><a href="#" class="btn btn-default"><h1>Roca</a></td>
                            @elseif ($user->type1 == 7)
                                <td><a href="#" class="btn btn-default"><h1>Bicho</a></td>
                            @elseif ($user->type1 == 8)
                                <td><a href="#" class="btn btn-default"><h1>Fantasma</a></td>
                            @elseif ($user->type1 == 9)
                                <td><a href="#" class="btn btn-default"><h1>Acero</a></td>
                            @elseif ($user->type1 == 10)
                                <td><a href="#" class="btn btn-danger"><h1>Fuego</a></td>
                            @elseif ($user->type1 == 11)
                                <td><a href="#" class="btn btn-primary"><h1>Agua</a></td>
                            @elseif ($user->type1 == 12)
                                <td><a href="#" class="btn btn-success"><h1>Planta</a></td>
                            @elseif ($user->type1 == 13)
                                <td><a href="#" class="btn btn-default"><h1>Eléctrico</a></td>
                            @elseif ($user->type1 == 14)
                                <td><a href="#" class="btn btn-default"><h1>Psíquico</a></td>
                            @elseif ($user->type1 == 15)
                                <td><a href="#" class="btn btn-default"><h1>Hielo</a></td>
                            @elseif ($user->type1 == 16)
                                <td><a href="#" class="btn btn-warning"><h1>Dragón</a></td>
                            @elseif ($user->type1 == 17)
                                <td><a href="#" class="btn btn-default"><h1>Siniestro</a></td>
                            @elseif ($user->type1 == 10001)
                                <td><a href="#" class="btn btn-default"><h1>Desconocido</a></td>
                            @endif  
                            @if($user->type2 == "")    
                            <td></td>               
                            @elseif($user->type2 == 1)
                                <td><a href="#" class="btn btn-dafault"><h1>Normal</a></td>
                            @elseif ($user->type2 == 2)
                                <td><a href="#" class="btn btn-default"><h1>Lucha</a></td>
                            @elseif ($user->type2 == 3)
                                <td><a href="#" class="btn btn-default"><h1>Volador</a></td>
                            @elseif ($user->type2 == 4)
                                <td><a href="#" class="btn btn-info"><h1>Veneno</a></td>
                            @elseif ($user->type2 == 5)
                                <td><a href="#" class="btn btn-default"><h1>Tierra</a></td>
                            @elseif ($user->type2 == 6)
                                <td><a href="#" class="btn btn-default"><h1>Roca</a></td>
                            @elseif ($user->type2 == 7)
                                <td><a href="#" class="btn btn-default"><h1>Bicho</a></td>
                            @elseif ($user->type2 == 8)
                                <td><a href="#" cl9ass="btn btn-default"><h1>Fantasma</a></td>
                            @elseif ($user->type2 == 9)
                                <td><a href="#" class="btn btn-default"><h1>Acero</a></td>
                            @elseif ($user->type2 == 10)
                                <td><a href="#" class="btn btn-danger"><h1>Fuego</a></td>
                            @elseif ($user->type2 == 11)
                                <td><a href="#" class="btn btn-primary"><h1>Agua</a></td>
                            @elseif ($user->type2 == 12)
                                <td><a href="#" class="btn btn-success"><h1>Planta</a></td>
                            @elseif ($user->type2 == 13)
                                <td><a href="#" class="btn btn-default"><h1>Eléctrico</a></td>
                            @elseif ($user->type2 == 14)
                                <td><a href="#" class="btn btn-default"><h1>Psíquico</a></td>
                            @elseif ($user->type2 == 15)
                                <td><a href="#" class="btn btn-default"><h1>Hielo</a></td>
                            @elseif ($user->type2 == 16)
                                <td><a href="#" class="btn btn-warning"><h1>Dragón</a></td>
                            @elseif ($user->type2 == 17)
                                <td><a href="#" class="btn btn-default"><h1>Siniestro</a></td>
                            @elseif ($user->type2 == 10001)
                                <td><a href="#" class="btn btn-default"><h1>Desconocido</a></td>
                            @endif  

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-features">
                <br><br>
                <div class="container">
                    <h1 class="header-text text-center">Descripción</h1>
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="card card-blue">
                                <div class="text">
                                    <h4>Altura</h4>
                                	<h1>{{$user->weight}}</h1>
                                    <h4>KG</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-blue">
                                <h4>Altura</h4>
                                	<h1>{{$user->height}}</h1>
                                    <h4>KG</h4>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-blue">
                               <h4>Altura</h4>
                                	<h1>{{$user->height}}</h1>
                                    <h4>Pulgadas</h4>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-blue">
                               
                               <h4>Capturable</h4>
                                	<h1>{{$user->capture_rate}}</h1>
                                    <h4>Puntos</h4>
                                </div>
                        </div>
                    </div>
                </div>

                <br><br><br><br><br>

	
@stop





