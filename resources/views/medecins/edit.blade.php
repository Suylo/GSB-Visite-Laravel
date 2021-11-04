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
                        <a href="/profile/{{ $m->id }}">Profil <strong>#{{ $m->id }}</strong></a>
                    <span class="material-icons">chevron_right</span>
                    Modification du profil
                @endforeach
            </div>

{{--
            <div class="button-center">
                @foreach($medecin as $m)
                    <a href="/profile/{{ $m->id }}" class="button is-link is-full-width">
                        <span class="material-icons">arrow_back</span>
                        Retourner en arrière
                    </a>
                @endforeach
            </div>
--}}

                <div class="column is-half is-offset-one-quarter ">
                    <div class="card equal-height pt-2">
                        <div class="has-text-centered">
                            <figure>
                                {{-- <img class="is-rounded" style="border-radius: 50%" src="https://thispersondoesnotexist.com/image" width="256"/>--}}
                                <img class="is-rounded" style="border-radius: 50%" src="https://cdn.discordapp.com/attachments/805548861250207774/899279690341154876/-favicon.jpg" width="256"/>
                            </figure>
                        </div>
                        <div class='card-content has-text-centered'>
                            <div class="content">
                                @foreach($medecin as $m)
                                    <form method="POST" action="{{ route('update.profile', ["id" => $m->id]) }}">
                                    @csrf
                                        <ul class="p-0 m-0 field">
                                            <li class="is-flex">
                                                <div class="mr-2">
                                                    • <strong class="has-text-link">Nom :</strong>
                                                    <input type="text" name="nom" id="nom" class="input mt-2" value="{{ $m->nom }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    @if ($errors->has('nom'))
                                                        <p class="help is-danger">{{ $errors->first('nom') }}</p>
                                                    @endif
                                                </div>
                                                <div class="ml-2">
                                                    • <strong class="has-text-link">Prénom :</strong>
                                                    <input type="text" name="prenom" id="prenom" class="input mt-2" value="{{ $m->prenom }}" required>
                                                </div>
                                                <div class="form-group mb-3">
                                                    @if ($errors->has('prenom'))
                                                        <p class="help is-danger">{{ $errors->first('prenom') }}</p>
                                                    @endif
                                                </div>
                                            </li>
                                            <li class="mt-2">
                                                <strong class="has-text-primary">Adresse :</strong>
                                                <input type="text" name="adresse" id="adresse" class="input mt-2" value="{{ $m->adresse }}" required>
                                            </li>
                                            <div class="form-group mb-3">
                                                @if ($errors->has('adresse'))
                                                    <p class="help is-danger">{{ $errors->first('adresse') }}</p>
                                                @endif
                                            </div>
                                            <li class="mt-2">
                                                <strong class="has-text-info">Téléphone :</strong>&nbsp;
                                                <input type="text" name="tel" id="tel" class="input mt-2" value="{{ $m->tel }}" required>
                                            </li>
                                            <div class="form-group mb-3">
                                                @if ($errors->has('tel'))
                                                    <p class="help is-danger">{{ $errors->first('tel') }}</p>
                                                @endif
                                            </div>
                                            @if($m->specialite_complementaire != null)
                                                <li>
                                                    <strong class="has-text-danger">Spécialité : </strong>
                                                    <input type="text" name="speci" id="speci" class="input mt-2" value="{{ $m->specialite_complementaire }}">
                                                </li>
                                                <div class="form-group mb-3">
                                                    @if ($errors->has('speci'))
                                                        <p class="help is-danger">{{ $errors->first('speci') }}</p>
                                                    @endif
                                                </div>
                                            @else
                                                <li>
                                                    <strong class="has-text-danger">Spécialité : </strong>
                                                    <input type="text" name="speci" id="speci" class="input mt-2" value="{{ $m->specialite_complementaire }}" placeholder="Ajouter une spécialité (laisser vide si non connu)">
                                                </li>
                                                <div class="form-group mb-3">
                                                    @if ($errors->has('speci'))
                                                        <p class="help is-danger">{{ $errors->first('speci') }}</p>
                                                    @endif
                                                </div>
                                            @endif
                                        </ul>
                                        <button type="submit" class="button is-danger is-full-width mt-3">
                                            <span class="material-icons">edit</span>&nbsp;
                                            Sauvegarder les modifications
                                        </button>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>

@endsection
