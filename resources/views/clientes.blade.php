@extends('master1')
@section('encabezado')
@stop

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 align="center">Listado de clientes</h1>
		</div>		
	</div>
</div>
<hr>
<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>							
							<th>CORREO</th>
							<th>TELEFONO</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($cliente as $c)
						<tr>
							<td>{{$c->id}}</td>
							<td>{{$c->nombre}}</td>
							<td>{{$c->correo}}</td>
							<td>{{$c->telefono}}</td>
							
							<td>
								<a href="{{url('/datosGenerales')}}/{{$c->id}}" class="btn btn-primary btn-xs btn-block">Iniciar Sesion</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@stop