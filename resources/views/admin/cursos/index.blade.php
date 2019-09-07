{{-- @extends('layout.site') --}}

@section('titulo', "cursos")

@section('conteudo') 
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{$registro->id}}</td>
                            <td>{{$registro->Titulo}}</td>
                            <td>{{$registro->Descricao}}</td>
                            <td><img width="120" src="{{asset($registro->Imagem)}}" alt="{{$registro->Titulo}}"></td>
                            <td>{{$registro->Publicado}}</td>
                            <td>
                                <a href="{{route('admin.cursos.editar',  $registro->id)}}" class="btn deep-orange">Editar</a>
                                <a href="{{route('admin.cursos.deletar',  $registro->id)}}" class="btn deep-red-darken-4">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a href="{{route('admin.cursos.adicionar')}}" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
        </div>
    </div>

@endsection

