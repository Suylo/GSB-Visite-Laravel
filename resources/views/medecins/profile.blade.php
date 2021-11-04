@extends('layout')

@section('content')



        <section class="section mt-6">
        <div class="container is-max-desktop">
            <div class="notification is-link navnotif">
                @foreach($medecin as $m)
                    <span class="material-icons">chevron_right</span>
                        <a href="/">Accueil</a>
                    <span class="material-icons">chevron_right</span>
                        <a href="/search">Recherche d'un médecin</a>
                    <span class="material-icons">chevron_right</span>
                        Profil <strong>#{{ $m->id }}</strong>
                @endforeach
            </div>

            <div class="column is-half is-offset-one-quarter ">
                <div class="card equal-height pt-2">
                    <div class="has-text-centered">
                        <figure>
{{--                            <img class="is-rounded" style="border-radius: 50%" src="https://thispersondoesnotexist.com/image" width="256"/>--}}
                            <img class="is-rounded" style="border-radius: 50%" src="https://cdn.discordapp.com/attachments/805548861250207774/899279690341154876/-favicon.jpg" width="256"/>
                        </figure>
                    </div>
                    <div class='card-content has-text-centered'>
                        <div class="content">
                            @foreach($medecin as $m)
                                <h3 class="has-text-link-dark">
                                    <strong>{{ $m->nom . " " . $m->prenom }}</strong>
                                </h3>
                                <ul class="p-0 m-0">
                                    <li>
                                        <strong class="has-text-primary">Adresse :</strong>
                                        {{ $m->adresse }}
                                    </li>
                                    <li class="level-item">
                                        •&nbsp;<strong class="has-text-info">Téléphone :</strong>&nbsp;
                                        {{ $m->tel }}
                                        &nbsp;
                                        <a href="tel:+33{{ $m->tel }}" class="button is-info is-outlined" title="Appeler le médecin">
                                            <span class="material-icons">call</span>
                                        </a>
                                    </li>
                                    @if($m->specialite_complementaire != null)
                                        <li>
                                            <strong class="has-text-danger">Spécialité : </strong>
                                            {{ $m->specialite_complementaire }}
                                        </li>
                                    @endif
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="button-center">
                    @foreach($medecin as $m)
                        <a href="/profile/{{ $m->id }}/rapports" class="button is-success is-full-width mt-5">
                            <span class="material-icons">visibility</span>&nbsp;
                            Voir les rapports concernant ce médecin
                        </a>
                        <a href="/profile/{{ $m->id }}/edit" class="button is-primary is-full-width mt-2">
                            <span class="material-icons">edit</span>&nbsp;
                            Modifier ses informations personnelles&nbsp;&nbsp;
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

        @if(session()->has('profileEdited'))
            <section class="container is-max-desktop notif">
                <div class="notification is-success">
                    <span class="material-icons">done</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('profileEdited') }}</span>
                </div>
            </section>
        @endif


        @if(session()->has('profileFailed'))
            <section class="container is-max-desktop notif is-850px">
                <div class="notification is-danger">
                    <span class="material-icons">error</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('profileFailed') }}</span>
                </div>
            </section>
        @endif
@endsection
