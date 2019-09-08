{{-- @extends('layout.site') --}}

@section('titulo', "Cursos")

@section('conteudo') 
    <div class="container">
        <h3 class="center">Editar Curso</h3>
       <div class="row">
           <form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- Tipo PUT --}}
                <input type="hidden" name="_method" value="put">
                @include('admin.cursos._form')

                <button class="btn blue right">Atualizar</button>
           </form>
       </div>
    </div>

@endsection

