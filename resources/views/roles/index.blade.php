
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Mostrar roles</h2>

        <a href="{{ url('roles/create')}}" class="btn btn-primary mb-3">Crear nuevo rol</a>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo de Rol</th>
                        <th>Acciones<th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($Roles as $R)
                    <tr>
                        <td class="table-primary">{{ $R->id }}</td>
                        <td class="table-primary">{{ $R->tipo_rol }}</td>
                        <td class="table-primary">
                        <span class="badge bg-primary">
                            
                        <a href="{{ url('/roles/'.$R->id.'/edit')}}">Editar</a>
                        
                        </span> |

                        <form action="{{ url('/roles/'.$R->id) }}" method="post" class="d-inline">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger" onclick='return confirm("¿Deseas eliminar este registro?")'>Eliminar</button>
                        </form>
                        </td>
                    </tr>
                        
                    @empty
                        <tr>
                            <td colspan="2">No hay roles para mostrar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
