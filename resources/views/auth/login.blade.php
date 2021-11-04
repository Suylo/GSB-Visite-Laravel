@extends('layout')


@section('content')
    <div class="banner">
        <div class="banner-overlay"></div>
        <div class="banner-wallpaper"></div>
    </div>

    @if(!Auth::check())
        @if(session()->has('noAccess'))
            <section class="container is-max-desktop notif-long">
                <div class="notification is-warning">
                    <span class="material-icons">visibility</span>&nbsp;&nbsp;<span class="text-left-icon has-text-dark">{{ session()->get('noAccess') }}</span>
                </div>
            </section>
        @endif
        @if(session()->has('loginFailed'))
            <section class="container is-max-desktop notif-long">
                <div class="notification is-danger">
                    <span class="material-icons">close</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('loginFailed') }}</span>
                </div>
            </section>
        @endif

    <main class="login-form is-relative z-index mt-6 section">
        <div class="container is-max-desktop">
            <div class="notification is-link">
                <p>Authentification requise avant de continuer !</p>
            </div>
        </div>
        <div class="container is-max-desktop mt-2">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="content pt-5">
                            <h1 class="card-header-title is-centered has-text-dark">
                                Connexion
                            </h1>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="field">
                                    <div class="control has-icons-left has-icons-right">
                                        <input type="text" placeholder="ID de connexion" id="login" class="input" name="login" required
                                               autofocus>
                                        <span class="icon is-small is-left">
                                            <span class="material-icons">
                                            person
                                            </span>
                                        </span>
                                        <span class="icon is-small is-right">
                                            <span class="material-icons">
                                                warning
                                            </span>
                                        </span>
                                    </div>
                                    @if ($errors->has('login'))
                                        <p class="help is-danger">{{ $errors->first('login') }}</p>
                                    @endif
                                </div>


                                <div class="control has-icons-left has-icons-right">
                                    <input type="password" placeholder="Mot de passe" id="password" class="input" name="password" required>
                                    <span class="icon is-small is-left">
                                            <span class="material-icons">
                                            password
                                            </span>
                                        </span>
                                    <span class="icon is-small is-right">
                                            <span class="material-icons">
                                                warning
                                            </span>
                                        </span>
                                    <div class="form-group mb-3">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember"> Se souvenir de moi
                                        </label>
                                    </div>
                                </div>

                                <div class="field is-grouped">
                                    <div class="control">
                                        <button class="button is-link" type="submit">Se connecter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endif



    @if(Auth::check())
        <section class="section mt-6 section-main">
            <div class="container mt-6">
                <div class="columns is-centered is-mobile is-relative z-index">
                    <div class="column is-half">
                        <div class="box mt-6">
                            <figure class="image">
                                <img src="https://cdn.discordapp.com/attachments/805548861250207774/899035523111333908/Sans_titre.png" width="256">
                            </figure>
                            <div class="content is-large">
                                <h1 class="has-text-link-dark mt-6">Galaxy Swiss Bourdin</h1>
                                <p>
                                    Bienvenue !
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
