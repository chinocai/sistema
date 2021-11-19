<div class="container">

<h1> {{ $modo}} empleado </h1>

<label for="Nombre"> Nombre </label>
<input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
<br>

<label for="Nombre"> ApellidoPaterno </label>
<input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno">
<br>

<label for="Nombre"> ApellidoMaterno </label>
<input class="form-control" type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno">
<br>

<label for="Nombre"> Correo </label>
<input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">
<br>
<label for="Nombre"> Foto </label>
@if(isset($empleado->Foto))
<img src=" {{ asset('storage').'/'.$empleado->Foto }}" width="100" alt=""> 
@endif
<input class="form-control" type="file" name="Foto" value="" id="Foto">

<br>
<input class="form-control" type="submit" value=" {{ $modo }} datos" id="Enviar"> 
<br>
<br>
<a href=" {{ url('empleado/') }}" class="btn btn-dark"> Regresar </a>
