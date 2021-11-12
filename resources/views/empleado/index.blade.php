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
            
            <td>{{ $empleado->id}}</td>
            <td>{{ $empleado->Foto}}</td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->ApellidoPaterno}}</td>
            <td>{{ $empleado->ApellidoMaterno}}</td>
            <td>{{ $empleado->Correo}}</td>
            <td> Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>

</table>