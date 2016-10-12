<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
	<script src="{{ asset("js/jquery.js") }}"></script>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	
		      <a href="{{url('/home')}}"><img class="img-responsive" src="images/logo.png" alt=""></a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pokemones<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Lucha</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Volador</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Veneno</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Tierra</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Roca</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Bicho</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Fantasma</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	            <li><a href="{{url('/consultarUsuarios')}}">Todos</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				@yield('encabezado')
				<hr>
				@yield('contenido')
			</div>
		</div>
	</div>
	<footer>
		<hr>
		<div class="text-center">Ingeniería Web &copy; 2016</div>
	</footer>
	<script src="{{ asset("js/bootstrap.js") }}"></script>
</body>
</html>