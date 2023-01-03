@extends('layout.front-template')

@section('title')
    Page modification
@endsection

@section('class')
    edit-formulaire
@endsection

@section('body')
<div>
    <h1>Modifier un article</h1>
    <hr>
    <form action="/{{ $article->id }}/update" id="forms" method="POST">
        @csrf
        @method('put')
        <div style="margin-bottom: 10px;">
            <input type="text" name="titre" id="titre" placeholder="Titre" value={{ $article->titre }}>
        </div>
        <div style="margin-bottom: 10px;">
            <input type="text" name="description" id="description" placeholder="Description" value={{ $article->description}}>
        </div>
        <div>
            <button type="submit">Modifier</button>
        </div>
    </form>
</div>
@endsection
