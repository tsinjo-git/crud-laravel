@extends('layout.front-template')

@section('title')
    Page formulaire
@endsection

@section('class')
    page-formulaire
@endsection

@section('body')
<div>
    <h1>Pages formulaire</h1>
    <hr>

    @if ($errors)
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

    @if (session()->has('success'))
        <div>{{ session()->get('success') }}</div>
    @endif
    
    <form action="/enregistrer" method="POST" id="forms">
        @csrf
        @method('post')
        <div style="margin-bottom: 10px;">
            <input type="text" name="titre" id="titre" placeholder="Titre" value={{ old('titre') }}>
        </div>
        <div style="margin-bottom: 10px;">
            <input type="text" name="description" id="description" placeholder="Description" value={{ old('description') }}>
        </div>
        <div>
            <button type="submit">Ajouter</button>
        </div>
    </form>
</div>
@endsection
