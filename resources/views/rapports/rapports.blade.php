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
                <span>Gérer mes rapports</span>
            </div>
            <div class="buttons">
                <a href="/createRapport">
                    <button class="button is-success">
                            <i class="material-icons">post_add</i>&nbsp;
                            Ajouter un rapport
                    </button>
                </a>
                &nbsp;
                <a href="/rapports/search">
                    <button class="button is-warning">
                        <i class="material-icons">edit</i>&nbsp;
                        Editer un rapport
                    </button>
                </a>
                &nbsp;
                <!--<button class="button is-danger">
                    <i class="material-icons">close</i>&nbsp;
                    Supprimer un rapport
                </button>-->
            </div>
            <div class="box">
                <table class="table is-striped is-fullwidth">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Motif</th>
                        <th>Bilan</th>
                        <th>Médecin</th>
                        <th>Médicaments</th>
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
                        </tr>
                @endforeach
            </div>

        </div>
    </section>

    {!! $rapports->links() !!}

    @if(session()->has('failed'))
        <section class="container is-max-desktop notif">
            <div class="notification is-danger">
                <span class="material-icons">error</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('failed') }}</span>
            </div>
        </section>
    @endif

    @if(session()->has('status'))
        <section class="container is-max-desktop notif">
            <div class="notification is-success">
                <span class="material-icons">done</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('status') }}</span>
            </div>
        </section>
    @endif
@endsection
