@extends ('master')
@section('encabezado')
<h1>Color de Fondo</h1>
@stop

@section('contenido')
<div class="progress progress-striped active">
  <div class="progress-bar" style="width: 99%">Paso: Fondo de Pagina</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 well">
      <fieldset>
          <form action="{{url('/guardarColor')}}/{{$clientes->id}}" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div align="center" class="form-group">
             
              <p>Selecciona tu color de Fondo:
              <input value="{{$datos_empresa->color}}" name="color" class="jscolor" onchange="update(this.jscolor)">

              <p id="rect" style="border:1px solid gray; width:161px; height:100px;">

                <script>
                 function update(jscolor) {
                   document.getElementById('rect').style.backgroundColor = '#' + jscolor
                 }
                </script>
              </p>
            </div>

            <div class="form-group">
              <div class="row" align="center">
                <br>
                 <a href="{{url('/imagenes')}}/{{$clientes->id}}" class="btn btn-primary">Anterior</a>
                <input align="center" type="submit" class="btn btn-primary" value="Guardar">
               
              </div>
            </div>
        </form>
        </fieldset>
    </div>
  </div>
</div>
@stop
