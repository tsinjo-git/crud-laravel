@extends('layout.front-template')

@section('title')
    Se connecter
@endsection

@section('class')
    login-page
@endsection

@section('body')
    <div>
        <h1>Se connecter</h1>
        <hr>
        <div>
            <form action="/register" method="POST">
                @csrf
                @method('post')
                <div class="form_user" style="margin-bottom: 10px;">
                    <input type="email" name="usermail" class="user" placeholder="E-mail utilisateur" value={{ old('usermail') }}>
                </div>
                <div class="form_user" style="margin-bottom: 10px;">
                    <input type="password" name="userpassword" class="user" placeholder="Mot de passe utilisateur">
                </div>
                <button type="submit">Envoyer</button>
                <div style="margin-top: 10px; margin-bottom:10px;">
                    <small>Je n'ai pas de compte <a href="{{ URL::to('register') }}">Créer un compte</a></small>
                </div>
            </form>
        </div>
    </div>
@endsection