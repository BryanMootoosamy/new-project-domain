<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/app.css">
        <title>Home</title>
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
                <li id="flux"><a class="menu-item" href="index.php?action=espaceperso">Espace Personnel</a></li>
                <li><a class="menu-item" href="{{ url('portfolio') }}">Portfolio</a></li>
            </ul>
        </div>
        <div class="sp-container">
            <div class="sp-content">
                <div class="sp-globe"></div>
                <h2 class="frame-1">BIENVENUE</h2>
                <h2 class="frame-2">PRENEZ UN SIÈGE</h2>
                <h2 class="frame-3">PENSEZ À VISITER MON PORTEFOLIO</h2>
                <h2 class="frame-4">C'EST SYMPA</h2>
                <h2 class="frame-5">
                    <span class="span1">PASSIONNÉ,</span>
                    <span class="span2">TRAVAILLEUR,</span>
                    <span class="span3">MOTIVÉ.</span>
                </h2>
                <a class="sp-circle-link" href="https://github.com/BryanMootoosamy?tab=repositories">Bryan</a>
            </div>
        </div>
    </body>
    <script src="{{ asset('js/burger-button.js') }}"></script>
</html>