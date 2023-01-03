@extends('layout.front-template')

@section('title')
    Page articles
@endsection

@section('class')
    page-articles
@endsection

@section('body')
<div>
    <h1>Pages articles</h1>
    <hr>
        <div class="our-blog">
                @forelse($articles as $article)
                    <div class="single-article">
                        <h2><a href="/{{ $article->id }}">{{ $article->titre }}</a></h2>
                        <p>{{ $article->description }}</p>
                    </div>
                @empty
                    <div>
                        <p>Aucun article trouvé</p>
                    </div>
                @endforelse
        </div>
</div>
@endsection
