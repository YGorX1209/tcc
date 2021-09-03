@extends('admin.layout.app')

@section('title' , 'listagem de postagem da qual sua pergunta')

@section('conteudo')
<h1 class="display-3">SITE DE VERDADES</h1>

<hr>

                <a class="btn btn-success" href="{{ route('postagens.create') }}">CLICA AQUI PRA VER UMA VERDADE</a>

@endsection



