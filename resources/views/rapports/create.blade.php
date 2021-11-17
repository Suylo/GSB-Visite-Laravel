@extends('layout')

@section('content')

    <style>
        .bloc-hidden{
            opacity: 0;
            visibility: hidden;
        }
        .bloc-see{
            opacity: 1;
            visibility: visible;
        }
    </style>

    <main class="section login-form is-relative z-index mt-6">
        <div class="container is-max-desktop">
            <div class="notification is-link navnotif">
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">home</span>&nbsp;
                <a href="/">Accueil</a>
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">folder</span>&nbsp;
                <a href="/rapports">Gérer mes rapports</a>
                <span class="material-icons">chevron_right</span>
                <span class="material-icons">note_add</span>&nbsp;
                <span>Création d'un rapport</span>
            </div>
        </div>
        <div class="container is-max-desktop mt-2">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="content pt-5">
                            <h1 class="card-header-title is-centered has-text-dark">
                                Création d'un nouveau rapport
                            </h1>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('create.rapports') }}">
                                @csrf
                                    <div class="field">
                                        <div class="control has-icons-left has-icons-right">
                                            <input type="date" id="select-date" name="date"
                                                   placeholder="jours / mois / année" class="input"
                                                   min="2000-01-01">
                                            <span class="icon is-small is-left">
                                                <span class="material-icons">
                                                calendar_today
                                                </span>
                                            </span>
                                        </div>
                                    </div>


                                    <div class="control has-icons-left has-icons-right mt-3">
{{--                                        <input type="text" placeholder="Motif" id="motif" class="input"--}}
{{--                                               name="motif">--}}
                                        <span class="icon is-small is-left">
                                            <span class="material-icons">
                                                subject
                                            </span>
                                        </span>
                                        <div class="select">
                                            <select name="motif" id="motif">
                                                <option selected disabled hidden>Choisir un motif</option>
                                                @foreach($motifs as $motif)
                                                    <option value="{{ $motif->motif }}">{{ $motif->motif }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control has-icons-left has-icons-right mt-3">
                                        <input type="text" placeholder="Bilan" id="bilan" class="input"
                                               name="bilan">
                                        <span class="icon is-small is-left">
                                                <span class="material-icons">
                                                event_note
                                                </span>
                                            </span>

                                    </div>

                                    <div class="control has-icons-left has-icons-right mt-3">
                                        <span class="icon is-small is-left">
                                                <span class="material-icons">
                                                    health_and_safety
                                                </span>
                                            </span>
                                        <div class="select">
{{--                                            <input class="input" list="suggestionList" id="medecin">--}}
{{--                                            <datalist id="suggestionList">--}}
{{--                                                    <option value="{{ $medecin->id }}">{{ $medecin->nom . " " . $medecin->prenom }}</option>--}}
{{--                                            </datalist>--}}
                                            <select name="medecin" id="medecin">
                                                <option selected disabled hidden>Choisir un médecin</option>
                                                @foreach($medecins as $medecin)
                                                    <option value="{{ $medecin->id }}">{{ $medecin->nom . " " . $medecin->prenom }}</option>
                                                 @endforeach
                                            </select>

                                        </div>
                                            <button class="ml-2 button bloc-see is-rounded is-primary" type="button" onclick="addInput('dynamicInput')" id="addButton" title="Ajouter un médicament">
                                            <span class="material-icons">add</span>&nbsp;
                                                Ajouter un médicament
                                            </button>
                                            <button class="button is-rounded is-danger bloc-hidden mb-3" type="button" id="removeButton" onclick="removeInput()" title="Supprimer un médicament">
                                                <span class="material-icons">remove</span>
                                            </button>

                                    </div>

                                    <div class="is-flex">
                                        <div id="dynamicInput"></div>
                                    </div>

                                    @if ($errors->any() || session()->has('medicBoth') || session()->has('invalidDate'))
                                        <div class="content mt-3">
                                            <p class="notification is-danger errors-list">
                                                <span class="material-icons">warning</span>
                                                Attention ! Votre création de rapport n'a pas pu aboutir. Voici les raisons :
                                            </p>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="is-danger">{{ $error }}</li>
                                                @endforeach
                                                @if(session()->has('medicBoth'))
                                                    <li>{{ session()->get('medicBoth') }}</li>
                                                @endif
                                                    @if(session()->has('invalidDate'))
                                                        <li>{{ session()->get('invalidDate') }}</li>
                                                    @endif
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="field is-grouped mt-4">
                                        <div class="control">
                                            <button class="button is-link" type="submit">Création du rapport</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <script>
            let medicID = [
                @foreach($medicaments as $medicament)
                    "{{ $medicament->id }}",
                @endforeach
            ];

            let medicChoices = [
                @foreach($medicaments as $medicament)
                    "{{ $medicament->nom_commercial }}",
                @endforeach
            ];

            var map = new Map();

            for(var j = 0; j < medicID.length; j++){
                map.set(medicID[j], medicChoices[j]);
            }
            let compteur = 1;
            let compteurMax = 6;
            let rmBtn = document.getElementById("removeButton");
            let addBtn = document.getElementById("addButton");

            function addInput(divName) {
                let listNb = document.querySelectorAll('#compteur').length;

                if (listNb < compteurMax){
                    let newDiv = document.createElement('div');
                    newDiv.setAttribute('class', 'is-flex');
                    newDiv.setAttribute('id', 'compteur');

                    let selectHTML = "";
                    selectHTML =
                        "<div class='control has-icons-left has-icons-right mr-3 mb-3'>" +
                            "<span class='icon is-small is-left'>" +
                                "<span class='material-icons'>medication</span>" +
                            "</span>" +
                            "<div class='select'> " +
                                "<select name='medic[" + compteur +"]'> " +
                                    "<option selected disabled hidden value=''>Choisir un médicament</option>";
                                        for(var medoc of map.keys()) {
                                            selectHTML += "<option value='" + medoc + "'>" + map.get(medoc) + "</option>";
                                        }
                                            selectHTML += "" +
                                "</select>" +
                            "</div>" +
                        "</div>" +
                        "<div class='control has-icons-left ml-3 mb-3'> " +
                            "<span class='icon is-small is-left'> " +
                                "<span class='material-icons'>production_quantity_limits</span>" +
                            "</span> " +
                            "<input type='number' placeholder='Quantité(s)' id='qte' class='input' name='qte[" + compteur +"]' max='100' min='1'>" +
                        "</div>";
                    console.log("compteur : " + compteur);
                    compteur = compteur + 1;
                    newDiv.innerHTML = selectHTML;
                    document.getElementById(divName).appendChild(newDiv);
                    rmBtn.classList.remove('bloc-hidden');
                    rmBtn.classList.add('bloc-see');
                } else {

                }

                if (compteur === compteurMax){
                    addBtn.classList.add('bloc-hidden');
                    addBtn.classList.remove('bloc-see');
                }
            }


            function removeInput(){
                document.querySelector('#compteur:last-child').remove();
                if (compteur > 0){
                    compteur--;
                    console.log(compteur)
                }
                if (compteur === 1){
                    rmBtn.classList.add('bloc-hidden');
                    rmBtn.classList.remove('bloc-see');
                }
                if (compteur < compteurMax){
                    addBtn.classList.add('bloc-see');
                    addBtn.classList.remove('bloc-hidden');
                }
            }

        </script>
    @endsection
