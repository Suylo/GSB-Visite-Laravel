@extends('layout')

@section('content')
    <section class="section mt-6">
        <div class="container is-max-desktop">
            <div class="notification is-link navnotif">
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">home</span>&nbsp;
                <a href="/">Accueil</a>
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">medication</span>&nbsp;
                <span>Liste des médicaments</span>
            </div>
        </div>
        <div class="container mt-6">
            <div class="box">
                <table class="table is-striped is-fullwidth">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Composition</th>
                        <th>Effets</th>
                        <th>Contre Indications</th>
                        <th>Famille</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($medicaments as $m)
                        <tr >
                            <td>{{ $m->nom_commercial }}</td>
                            <td>{{ $m->composition }}</td>
                            <td>{{ $m->effets }}</td>
                            <td>{{ $m->contre_indications }}</td>
                            <td>{{ $m->famille->libelle }}</td>
                        </tr>
                @endforeach
            </div>

        </div>
    </section>

@endsection
