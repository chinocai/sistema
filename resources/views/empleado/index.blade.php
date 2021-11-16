mostrar la lista de empleados :)
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
            {{ $empleado ->Foto }}
            </td>

            <td>
            <img src=" {{ assets('storage').'/'.$empleado->Foto }}" alt="" >
            </td>


            <td>{{ $empleado->id}}</td>
            <td>{{ $empleado->Foto}}</td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->ApellidoPaterno}}</td>
            <td>{{ $empleado->ApellidoMaterno}}</td>
            <td>{{ $empleado->Correo}}</td>
            <td> 
            
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
            Editar  
            </a>
             |

            <form method="post" action="{{ url('/empleado/'.$empleado->id)}}">
            @csrf
            {{ method_field('DELETE') }}

            <input type="submit" onclick="return confirm('¿Querés Borrar?')" value="Borrar">

                
            </form>                

            </td>
        </tr>
        @endforeach
    </tbody>

</table>