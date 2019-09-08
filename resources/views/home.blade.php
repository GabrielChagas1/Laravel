{{-- @extends('layout.site') --}}

@section('titulo', "cursos")

@section('conteudo') 
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            @foreach ($registros as $registro)
                @if ($registro->Publicado == 'Sim')
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                            <img src="{{asset($registro->Imagem)}}">
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                            </div>
                            <div class="card-content">
                            <span class="card-title">{{$registro->Titulo}}</span>
                            <p>{{$registro->Descricao}}</p>
                            </div>
                        </div>
                    </div>
                @endif
              @endforeach
        </div> 
        <div class="row" align="center">
            {{$registros->links()}}
        </div>
    </div>

@endsection

