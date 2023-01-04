@extends('layout.front-template')

@section('title')
    Creer un compte
@endsection

@section('class')
    register-page
@endsection

@section('body')
    <div>
        <h1>Créer un compte</h1>
        <hr>
        <div>
            @if ($errors)
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            @endif

            @if (session()->has("success"))
                {{ session()->get("success") }}
            @endif
            <form action="/register" method="POST">
                @csrf
                @method('post')
                <div class="form_user" style="margin-bottom: 10px;">
                    <input type="text" name="username" class="user" placeholder="Nom utilisateur" value={{ old('username') }}>
                </div>
                <div class="form_user" style="margin-bottom: 10px;">
                    <input type="email" name="usermail" class="user" placeholder="E-mail utilisateur" value={{ old('usermail') }}>
                </div>
                <div class="form_user" style="margin-bottom: 10px;">
                    <input type="password" name="userpassword" class="user" placeholder="Mot de passe utilisateur">
                </div>
                <button type="submit">Envoyer</button>
                <div style="margin-top: 10px; margin-bottom:10px;">
                    <small>J'ai un compte <a href="{{ URL::to('login') }}">Se connecter</a></small>
                </div>
            </form>
        </div>
    </div>
@endsection