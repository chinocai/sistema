@extends('layouts.app')

@section('content')
<div class="container">


    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
    {{ Session::get('mensaje') }}
    @endif
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <spam aria-hidden="true">&times;</spam>
</button>
</div>

</div>



<a href=" {{ url('empleado/create') }} " class="btn btn-success"> Registrar nuevo empleado </a> 
<br>
<br>
<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>ApelidoPAterno</th>
            <th>ApellidoMaterno</th>
            <th>Correo</th>
            <th>Acciones</th>

        </tr>

    </thead>

    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>

            {{ $empleado ->id }}

            </td>
            
            <td>
            <img src=" {{ asset('storage').'/'.$empleado->Foto }}" class="img-thumbnail img-fluid" alt="" >
            </td>
            
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->ApellidoPaterno}}</td>
            <td>{{ $empleado->ApellidoMaterno}}</td>
            <td>{{ $empleado->Correo}}</td>
            <td> 
            
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
            Editar  
            </a>
             |

            <form method="post" action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline">
            @csrf
            {{ method_field('DELETE') }}

            <input type="submit" onclick="return confirm('¿Querés Borrar?')" value="Borrar" class="btn btn-danger">

                
            </form>                

            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection