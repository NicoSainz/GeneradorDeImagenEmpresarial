<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informacion General de la empresa {{$datos_empresa->nombre}}</title>
	<link rel="stylesheet" href="{{ asset("css/pdf.css") }}">
</head>
<body>
	
	<p align="center"><img src="img/logo1.jpg" WIDTH=360 HEIGHT=100 alt="NEAS"></p>
	<div class="jumbotron">
		<h2 align="center">CURRICULUM EMPRESARIAL</h2>
	</div>
	<table align="center">
		<thead>
	    <tr>
	   	  <th>Empresa : {{$datos_empresa->nombre}}</th>
	      <th>Informacion Empresarial</th>
	    </tr>
	  </thead>
	  <tbody>

		<tr>
			<td>Encargado :</td>
			<td>{{$datos_empresa->nom_encargado1}}</td>
		</tr>
		<tr>
			<td>Eslogan :</td>
			<td>{{$datos_empresa->eslogan}}</td>
		</tr>
		<tr>
			<td>Direccion :</td>
			<td>{{$datos_empresa->domicilio}}</td>
		</tr>
		<tr>
			<td>Telefono :</td>
			<td>{{$datos_empresa->telefono}}</td>
		</tr>
		<tr>
			<td>correo :</td>
			<td>{{$datos_empresa->correo}}</td>
		</tr>
		<tr>
			<td>vision :</td>
			<td>{{$datos_empresa->vision}}</td>
		</tr>
		<tr>
			<td>mision :</td>
			<td>{{$datos_empresa->mision}}</td>
		</tr>
		</tbody>
	</table>	

	<footer  class="page-footer">          
      <div class="footer-copyright">
        <div align="center" class="container">
        © 2016 Copyright NEAS
        </div>
      </div>
    </footer>
</body>

</html>