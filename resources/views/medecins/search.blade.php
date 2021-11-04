@extends('layout')

@section('content')

    <section class="section mt-6">
        <div class="container is-max-desktop">
            <div class="notification is-link navnotif">
                <span class="material-icons">chevron_right</span>
                <a href="/">Accueil</a>
                <span class="material-icons">chevron_right</span>
                <span>Recherche d'un médecin</span>
            </div>
        </div>
    </section>

    <section class="section">
        <section class="container">
            <div class="columns is-centered is-full">
                <form action="{{ route('search.medecins') }}" method="POST" role="search" class="is-flex">
                    {{ csrf_field() }}
                    <div class="control">
                        <input type="text" class="input" name="q" placeholder="Rechercher un médecin">
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-info">
                        <span class="material-icons">
                            search
                        </span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </section>



    @if(count($medecins) > 0)
        <div class="box container is-max-desktop mb-6">
            <table class="table is-striped is-fullwidth ">
                <thead>
                <tr class="is-uppercase">
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Spécialité</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($medecins as $medecin)
                    <tr>
                        <th class="counterCell"></th>
                        <td>{{ $medecin->nom }}</td>
                        <td>{{ $medecin->prenom }}</td>
                        @if($medecin->specialite_complementaire == null)
                            <td class="has-text-danger">//</td>
                        @else
                            <td>{{ $medecin->specialite_complementaire }}</td>
                        @endif
                        <td>
                            <a href="/profile/{{ $medecin->id }}" class="button is-success">
                                <span class="material-icons">person</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @elseif(count($medecins) == null)
        <div class="box container is-max-desktop">
            <h1 class="is-text">Aucun médecin n'a été trouvé, veuillez recommencer votre recherche !</h1>
        </div>
    @endif

@endsection
