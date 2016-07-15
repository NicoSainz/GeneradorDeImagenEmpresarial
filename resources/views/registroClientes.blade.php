@extends('master1')
@section('encabezado')

@stop

@section('contenido')
<style type="text/css">
	form{
		width: 550px;
	
		margin: -70px auto;
		border:1px solid #cacaca;
	}
</style>

<div class="jumbotron" style="background: #00b2b6">
<h1 align="center"><font FACE="geometr415 blk bt" color="white" SIZE=12 > Ingresa tus datos </font></h1>
	</div>
	
		<div class="jumbotron">
		<form>
	      		<div class="form-group">
   				 <div class="container">
   				 <div class="form-group">
						<label for="nombredeusuario"><font color="black" size="5"> Nombre de Usuario: </label>
						<input type="text" class="form-control" name="nombredeusuario" placeholder="Ingrese el nombre de usuario que desea.">
					</div>
					<div class="form-group">
						<label for="contraseña">Contraseña: </label>
						<input type="text" class="form-control" name="contraseña" placeholder="Introduzca una contraseña.">
					</div>

					<div class="form-group">
						<label for="email">Correo Electronico: </label>
						<input type="email" class="form-control" name="email" placeholder="Introduzca su correo electronico.">
					</div>

					<div class="form-group">
						<label for="empresa">Empresa: </label>
						<input type="text" class="form-control" name="Empresa" placeholder="Introduzca el nombre de la empresa.">
					</div>
					<div class="form-group">
						<label for="telefono">Telefono: </label>
						<input type="text" class="form-control" name="telefono" placeholder="Introduzca su numero telefonico.">
					</div>
					</font>
						
			             <input id="campo3" name="enviar" type="submit" value="Enviar">
			             <input id="campo3" name="enviar" type="submit" value="Cancelar"  href="{{url('/registroClientes')}}">
					</div>
				</div>
			</div>
	</div>
</div>

</form>
<center>	
  		<div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; NEAS 2016
                    </div>
                </div>
            </div>
        </div>
        </center>	
@stop