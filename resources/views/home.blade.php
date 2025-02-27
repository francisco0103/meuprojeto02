@extends ('partials.app')
@section('content') 
<table border = "1">
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Ações</td>
    </thead>
     <tbody>
        
            @foreach ($usuarios as $usuario)
        <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->name}}</td>
        <td>Editar| Excluir</td>
        </tr>
        @endforeach
</tbody>
</table>

{{ $usuarios->links(); }}

@endsection

