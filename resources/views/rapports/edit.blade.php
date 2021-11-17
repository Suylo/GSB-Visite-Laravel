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
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">edit</span>&nbsp;
                Modification
            </div>
        </div>
    </section>

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
                    <form method="POST" action="{{ route('update.rapport', ["id" => $rapport->id]) }}">
                        {{ csrf_field() }}
                            <tr>
                                <td>{{ $rapport->date }}</td>
                                <td>
                                    {{--< input type="text" name="motif" class="input" value="{{ $rapport->motif }}"> --}}
                                    <div class="select">
                                        <select name="motif" id="motif">
                                            <option hidden>{{ $rapport->motif }}</option>
                                            @foreach($motifs as $motif)
                                                <option value="{{ $motif->motif }}">{{ $motif->motif }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('motif'))
                                        <p class="help is-danger">{{ $errors->first('motif') }}</p>
                                    @endif
                                </td>
                                <td>
                                    <input type="text" name="bilan" class="input" value="{{ $rapport->bilan }}">
                                    @if ($errors->has('bilan'))
                                        <p class="help is-danger">{{ $errors->first('bilan') }}</p>
                                    @endif
                                </td>
                                <td>{{ $rapport->medecin->nom . " " . $rapport->medecin->prenom }}</td>
                                <td>
                                    @foreach($rapport->offrirs as $offrir)
                                        {{ $offrir->medicament->nom_commercial }} : <strong>{{ $offrir->quantite }}</strong><br>
                                    @endforeach
                                </td>
                                <td>
                                    <button type="submit" name="submit" class="button is-danger">
                                        <span class="material-icons">save</span>
                                    </button>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>
        </div>

    @if(session()->has('rapportUpdateError'))
        <section class="container is-max-desktop notif is-850px">
            <div class="notification is-danger">
                <span class="material-icons">error</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('rapportUpdateError') }}</span>
            </div>
        </section>
    @endif

    @if(session()->has('rapportUpdateFailed'))
        <section class="container is-max-desktop notif is-850px">
            <div class="notification is-danger">
                <span class="material-icons">error</span>&nbsp;&nbsp;<span class="text-left-icon">{{ session()->get('rapportUpdateFailed') }}</span>
            </div>
        </section>
    @endif

@endsection
