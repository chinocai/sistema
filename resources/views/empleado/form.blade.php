<label for="Nombre"> Nombre </label>
<input class="form-control" type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre">
<br>

<label for="Nombre"> ApellidoMaterno </label>
<input class="form-control" type="text" name="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}" id="ApellidoPaterno">
<br>

<label for="Nombre"> ApellidoPaterno </label>
<input class="form-control" type="text" name="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}" id="ApellidoMaterno">
<br>
<label for="Nombre"> Correo </label>
<input class="form-control" type="text" name="Correo" value="{{ $empleado->Correo }}" id="Correo">
<br>
<label for="Nombre"> Foto </label>
{{ $empleado->Foto }}
<input class="form-control" type="file" name="Foto" value="" id="Foto">
<br>
<input class="form-control" type="submit" value="Guardar datos" id="Enviar">