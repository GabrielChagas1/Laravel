{{-- @extends('layout.site') --}}

@section('titulo', "Login")

@section('conteudo') 
    <div class="container">
        <h3 class="center">Entrar no Sistema</h3>
       <div class="row">
           <form action="{{route('site.login.entrar')}}" method="POST">
                {{ csrf_field() }}

                <div class="input-field">
                    <input type="email" name="email" value="">
                    <label>Email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="senha">
                    <label>Senha</label>
                </div>

                <button class="btn blue right">Logar no Sistema</button>
           </form>
       </div>
    </div>

@endsection

