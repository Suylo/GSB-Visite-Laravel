@extends('layout')

@section('content')
    <div class="banner">
        <div class="banner-overlay"></div>
        <div class="banner-wallpaper"></div>
    </div>

    <section class="section mt-6 z-index is-relative">
        <div class="container is-max-desktop">
            <div class="notification is-link navnotif">
                <span class="material-icons">chevron_right</span>
                <a href="/">Accueil</a>
                <span class="material-icons">chevron_right</span>
                <span>Votre profil</span>
            </div>
            <div class="box">
                <article class="media">
                    <div class="media-left">
                        <figure class="profile-picture ">
                            <img class="is-rounded" src="https://cdn.discordapp.com/attachments/805548861250207774/899279690341154876/-favicon.jpg" alt="Image" width="256">
                        </figure>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <h3 class="has-text-link-dark">
                                <strong>{{ Auth::User()->prenom . " " .  Auth::User()->nom }}</strong> <small>{{ "@" . Auth::User()->login }}</small>
                            </h3>
                            <ul>
                                <li>
                                    <strong class="has-text-primary">Adresse</strong> :
                                    {{ Auth::User()->adresse  . ", " . Auth::User()->cp . " " . Auth::User()->ville }}
                                </li>
                                <li>
                                    <strong class="has-text-info">Date d'embauche : </strong>
                                    {{ Auth::User()->date_embauche }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>



    @if(session()->has('successLogin'))
        <section class="container is-max-desktop notif">
            <div class="notification is-success">
                <span class="material-icons">done</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('successLogin') }}</span>
            </div>
        </section>
    @endif
@endsection

