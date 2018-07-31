<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/app.css">
        <title>Tchat</title>
    </head>
    <body>
        <div class="header-container">
            <h1 class="title">Bryan's Domain</h1>
            <p class="under-title">"Oh look ! A penny !"</p>
        </div>
        <div id="burger-button">
                <div id="lign-1"></div>
                <div id="lign-2"></div>
                <div id="lign-3"></div>
        </div>
        <div class="navigation" id="navigation">
            <ul class="menu">
                <li><a class="menu-item" href="{{ url('/') }}">Homepage</a></li>
                <li id="flux"><a class="menu-item" href="{{ url('tchat') }}">Tchat</a></li>
                <li><a class="menu-item" href="{{ url('portfolio') }}">Portfolio</a></li>
            </ul>
        </div>
        <section class="site-content">
            <div class="form-container">
                <h3>Inscription</h3>
                {{ Form::open() }}
                <p>{{ Form::label('email', "Adresse Mail") }}</p>
                {{ Form::email('email', null) }}
                <p>{{ Form::label('password', 'Mot de passe') }}</p>
                {{ Form::password('password', null) }}
                <p>{{ Form::button('Envoyer') }}</p>
                {{ Form::close() }}
            </div>
            <div class="signIn-redirection">
                <h3>Pas encore de compte ?</h3>
                <p><a href="{{ url('sign-up') }}" class="redirection-link">Cliquez ici</a> pour vous enregistrer.</p>
            </div>
        </section>
    </body>
</html>