@extends('layout.site')

@section('titulo', "contatos")

@section('conteudo') 
    <h3>View index contato</h3>
    @foreach($contatos as $contato)
        <p>{{ $contato->nome}}</p>
        <p>{{$contato->telefone}}</p> 
    @endforeach

@endsection

