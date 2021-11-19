<div class="container">

<h1> {{ $modo}} empleado </h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
    </div>

@endif

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
<label for="Nombre">  </label>
@if(isset($empleado->Foto))
<img src=" {{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail img-fluid" alt=""> 
@endif
<input class="form-control" type="file" name="Foto" value="" id="Foto">

<br>
<input class="btn btn-success" type="submit" value=" {{ $modo }} datos" id="Enviar"> 

<a href=" {{ url('empleado/') }}" class="btn btn-primary"> Regresar </a>
