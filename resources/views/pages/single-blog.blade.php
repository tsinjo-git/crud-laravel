@extends('layout.front-template')

@section('title')
    {{ $article->titre }}
@endsection

@section('class')
    single-article
@endsection

@section('body')
    <a href="{{ URL::to('/') }}">Retour</a>
    <div>
        <h2>{{ $article->titre }}</h2>
        <hr>
        <p>{{ $article->description }}</p>
        <hr>
        <div class="button-action">
            <a class="btnbtn" href="{{ $article->id }}/editer">Modifier</a>
            <div>
                <form action="{{ $article->id }}/delete" method="post">
                    @csrf
                    @method('delete')
                    <button class="btnbtn" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
        <hr>
    </div>
@endsection
