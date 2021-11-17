@extends('layout')

@section('content')

    <section class="section mt-6">
        <div class="container is-max-desktop">
            <div class="notification is-link navnotif">
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">home</span>&nbsp;
                <a href="/">Accueil</a>
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">folder</span>&nbsp;
                <a href="/rapports">Gérer mes rapports</a>
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">find_in_page</span>&nbsp;
                <a href="/rapports/search">Recherche d'un rapport</a>
            </div>
        </div>
    </section>

    <section class="section">
        <section class="container">
            <div class="columns is-centered is-full">
                <form action="{{ route('search.rapports') }}" method="POST" role="search" class="is-flex">
                    {{ csrf_field() }}
                    <div class="control level-item">
                        <p>Rechercher un rapport avec une date précise :&nbsp;</p>
                    </div>
                    <div class="control level-item">
                        <input type="date" class="input is-info" name="q" placeholder="Rechercher un rapport" value="Rechercher un rapport">
                    </div>
                    <div class="control ml-3">
                        <button type="submit" class="button is-medium is-rounded is-info">
                            <span class="material-icons">search</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </section>

    @if(count($rapports) > 0)
        <div class="box container mb-6">
            <table class="table is-striped is-fullwidth ">
                <thead>
                <tr class="is-uppercase">
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th>
                    <th>Médecin</th>
                    <th>Médicaments</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rapports as $rapport)
                    <tr >
                        <td>{{ $rapport->date }}</td>
                        <td>{{ $rapport->motif }}</td>
                        <td>{{ $rapport->bilan }}</td>
                        <td>{{ $rapport->medecin->nom . " " . $rapport->medecin->prenom }}</td>
                        <td>
                            @foreach($rapport->offrirs as $offrir)
                                {{ $offrir->medicament->nom_commercial }} : <strong>{{ $offrir->quantite }}</strong><br>
                            @endforeach
                        </td>
                        <td>
                            <a href="/rapports/edit/{{ $rapport->id }}" class="button is-link" title="Modifier le rapport N°{{ $rapport->id }}">
                                <span class="material-icons">edit</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="box container is-max-desktop">
            <h1 class="is-text">Aucun rapport(s) n'a été trouvé à cette date, veuillez recommencer votre recherche !</h1>
        </div>
    @endif


    @if(session()->has('rapportUpdateSuccess'))
        <section class="container is-max-desktop notif">
            <div class="notification is-success">
                <span class="material-icons">done</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('rapportUpdateSuccess') }}</span>
            </div>
        </section>
    @endif



@endsection
