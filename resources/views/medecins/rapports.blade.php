@extends('layout')

@section('content')

    <section class="section mt-6">
        <div class="container is-max-desktop">
            <div class="notification is-link navnotif">
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">home</span>&nbsp;
                <a href="/">Accueil</a>
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">person_search</span>&nbsp;
                <a href="/search">Recherche d'un médecin</a>
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">account_circle</span>&nbsp;
                <a href="/profile/{{ $medecinID }}">Profil <strong>#{{ $medecinID }}</strong></a>
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">assignment</span>&nbsp;
                Ses rapports
            </div>
            <div class="box">
                <table class="table is-striped is-fullwidth">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Motif de la visite</th>
                        <th>Bilan de la visite</th>
                        <th>Visiteur</th>
                        <th>Médicament(s) reçu(s)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rapports as $rapport)
                        <tr >
                            <td>{{ $rapport->date }}</td>
                            <td>{{ $rapport->motif }}</td>
                            <td>{{ $rapport->bilan }}</td>
                            <td>{{ $rapport->visiteur->nom . " " . $rapport->visiteur->prenom }}</td>
                            <td>
                                @foreach($rapport->offrirs as $offrir)
                                    {{ $offrir->medicament->nom_commercial }} : <strong>{{ $offrir->quantite }}</strong><br>
                                @endforeach
                            </td>
                        </tr>
                @endforeach
            </div>
        </div>
    </section>

@endsection
