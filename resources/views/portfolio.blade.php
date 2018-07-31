<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/app.css">
        <title>Portfolio</title>
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
        <div class="site-content">
            <h2>A propos</h2>
            <div id="profile-image">
                <img src="{{ asset('images/face.jpg') }}" alt="Photo de profil">
            </div>
            <section class="content">
                <section class="left">
                    <h3>Petite Bio</h3>
                    <p>Ancien étudiant en Droit à l'Université de Mons, j'ai changé d'orientation afin de me focaliser sur mes passions:
                    l'informatique et le développement. J'ai donc intégré la formation BeCode (plus particulièrement la première promotion du centre de formation de
                    Charleroi situé au Quai 10). Mon objectif est d'être Full Stack / polyvalent afin de pouvoir répondre à n'importe quel besoin.</p>
                </section>
                <section class="right">
                    <h3>Portfolio</h3>
                    <ul>
                        <li>PHP + mySQL: <a href="https://mootoosamybryan.be/php-chat-db/index.php">Tchat en ligne</a></li>
                        <li>Design + premier MVC: <a href="https://mootoosamybryan.be/MVC%20Demotte/">Reproduction du site de Didier Motte</a></li>
                        <li>Apprentissage du CMS Wordpress: <a href="https://mootoosamybryan.be/foodog/">FooDog</a></li>
                        <li>Jeu Clicker (toujours en développement): <a href="https://mootoosamybryan.be/sausageclicker/">Sausage Clicker</a></li>
                        <li>Jeu utilisant Phaser (toujours en développement): <a href="https://mootoosamybryan.be/uppercards/">UpperCards</a></li>
                    </ul>
                </section>
            </section>
        </div>
    </body>
    <script src="{{ asset('js/burger-button.js') }}"></script>
</html>