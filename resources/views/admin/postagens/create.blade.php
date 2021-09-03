@extends('admin.layout.app')

@section('title' , 'nova postagens')

@section('conteudo')
<h1 class="display-4">SUA MÃE É GORDA</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="titulo">titulo</label>
        <input type="text" name="titulo" id="titulo">
    </div>

    <div class="form-group">
        <label for="subtitulo">subtitulo</label>
        <input type="text" name="subtitulo" id="subtitulo">

        <div class="form-group">
            <label for="texto">texto</label>
            <textarea
        </div>

</form>

@endsection