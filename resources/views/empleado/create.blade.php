formulario de creacion de empleadosssssss

<form method="post" action="{{ url('/empleado') }}" enctype="multipart/form-data">
    @csrf
<label for="Nombre"> Nombre </label>
<input class="form-control" type="text" name="Nombre" id="Nombre">
<br>
<label for="Nombre"> ApellidoMaterno </label>
<input class="form-control" type="text" name="ApellidoPaterno" id="ApellidoPaterno">
<br>
<label for="Nombre"> ApellidoPaterno </label>
<input class="form-control" type="text" name="ApellidoMaterno" id="ApellidoMaterno">
<br>
<label for="Nombre"> Correo </label>
<input class="form-control" type="text" name="Correo" id="Correo">
<br>
<label for="Nombre"> Foto </label>
<input class="form-control" type="file" name="Foto" id="Foto">
<br>
<input class="form-control" type="submit" name="Enviar" id="Enviar">
</form>
