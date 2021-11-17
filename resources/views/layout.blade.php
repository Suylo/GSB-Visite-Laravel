<!doctype html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <title>GSB Visite - {{ $title }}</title>
</head>
    <body>

    <nav class="navbar is-fixed-top has-shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="https://cdn.discordapp.com/attachments/805548861250207774/899035523111333908/Sans_titre.png" width="100">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    <span class="material-icons">home</span>&nbsp;
                    Accueil
                </a>
                @if(Auth::check())
                    <a class="navbar-item" href="/dashboard">
                        <span class="material-icons">info</span>&nbsp;
                        Profil
                    </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            <span class="material-icons">manage_search</span>&nbsp;
                            Gestion
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="/rapports">
                                <span class="material-icons">description</span>&nbsp;
                                Gérer mes rapports
                            </a>
                            <a class="navbar-item" href="/search">
                                <span class="material-icons">health_and_safety</span>&nbsp;
                                Gérer les médecins
                            </a>
                            <a class="navbar-item" href="/about">
                                <span class="material-icons">medication</span>&nbsp;
                                Liste des médicaments
                            </a>
                        </div>
                    </div>
                @endif
            </div>

            @if(Auth::check())
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="navbar-item">
                            <div>
                                Bonjour <strong>{{  Auth::user()->prenom . " " . Auth::user()->nom}}</strong>
                            </div>
                        </div>
                        <div class="buttons">
                            <a class="button is-link" href="/signout">
                            <span class="material-icons">
                                logout
                            </span>
                                &nbsp;&nbsp;Déconnexion
                            </a>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </nav>

        @yield('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </body>
</html>
