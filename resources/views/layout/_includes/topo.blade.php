<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">    <!--Import materialize.css-->
    {{-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> --}}
    
</head>
<body>
       <header>
            <nav class="blue">
                <div class="nav-wrapper ">
                    <a href="#!" class="brand-logo">Curso de Laravel</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        @if (Auth::guest())
                        <li><a href="{{route('site.login')}}">Login</a></li>

                        @else
                        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>  
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('site.login.sair')}}">Sair</a></li>  
                        @endif
                    </ul>
                </div>
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="/">Home</a></li>
                    @if (Auth::guest())
                        <li><a href="{{route('site.login')}}">Login</a></li>

                        @else
                        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>  
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('site.login.sair')}}">Sair</a></li>  
                    @endif
                </ul>
            </nav>
       </header>

