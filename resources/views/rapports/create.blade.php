@extends('layout')

@section('content')

    <main class="section login-form is-relative z-index mt-6">
        <div class="container is-max-desktop">
            <div class="notification is-link navnotif">
                <span class="material-icons">chevron_right</span>
                <a href="/">Accueil</a>
                <span class="material-icons">chevron_right</span>
                <a href="/rapports">Gérer mes rapports</a>
                <span class="material-icons">chevron_right</span>
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
                                                   min="2000-01-01" required>
                                            <span class="icon is-small is-left">
                                                <span class="material-icons">
                                                calendar_today
                                                </span>
                                            </span>
                                        </div>
                                    </div>


                                    <div class="control has-icons-left has-icons-right mt-3">
                                        <input type="text" placeholder="Motif" id="motif" class="input"
                                               name="motif" required>
                                        <span class="icon is-small is-left">
                                            <span class="material-icons">
                                                subject
                                            </span>
                                        </span>
                                    </div>

                                    <div class="control has-icons-left has-icons-right mt-3">
                                        <input type="text" placeholder="Bilan" id="bilan" class="input"
                                               name="bilan" required>
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
                                            <select name="medecin" id="medecin">
                                                <option selected disabled hidden>Choisir un médecin</option>
                                                @foreach($medecins as $medecin)
                                                        <option value="{{ $medecin->id }}">{{ $medecin->nom . " " . $medecin->prenom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="is-flex mt-3">
                                        <div class="control has-icons-left has-icons-right mr-3">
                                            <span class="icon is-small is-left">
                                                <span class="material-icons">medication</span>
                                            </span>

                                            <div class="select">
                                                <select name="medic[]" id="medic" class="select is-multiple">
                                                    <option selected disabled hidden>Choisir un médicament</option>
                                                    @foreach($medicaments as $medicament)
                                                        <option value="{{ $medicament->id }}">{{ $medicament->nom_commercial }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control has-icons-left ml-3">
                                            <span class="icon is-small is-left">
                                                <span class="material-icons">production_quantity_limits</span>
                                            </span>
                                            <input type="number" placeholder="Quantité(s)" id="medic" class="input" name="qte[]" max='100' min='1' required>
                                        </div>
                                        <div class="control has-icons-left ml-3">
                                            <button class="button is-rounded is-primary" type="button" onclick="addInput('dynamicInput')" id="addButton" title="Ajouter un médicament">
                                                <span class="material-icons">add</span>&nbsp;
                                                Ajouter (4 max.)
                                            </button>
                                            <button class="button is-rounded is-danger  mb-3" type="button" id="removeButton" onclick="removeInput()" title="Supprimer un médicament">
                                                <span class="material-icons">remove</span>
                                                &nbsp;Supprimer
                                            </button>
                                        </div>
                                    </div>

                                    <div class="is-flex">
                                        <div id="dynamicInput"></div>
                                    </div>


                                    @if ($errors->any())
                                        <div class="content mt-3">
                                            <p class="notification is-danger errors-list">
                                                <span class="material-icons">warning</span>
                                                Attention ! Votre création de rapport n'a pas pu aboutir. Voici les raisons :
                                            </p>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li class="is-danger">{{ $error }}</li>
                                                @endforeach
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

            function addInput(divName) {
                if (compteur < 4){
                    console.log("Compteur : " + compteur);
                    var newDiv = document.createElement('div');
                    newDiv.classList.add('is-flex');
                    newDiv.classList.add('counter-' + compteur);
                    var selectHTML = "";
                    selectHTML="" +
                        "<div class='control has-icons-left has-icons-right mr-3 mb-3'>" +
                        "<span class='icon is-small is-left'>" +
                        "<span class='material-icons'>medication</span>" +
                        "</span>" +
                        "<div class='select'> " +
                        "<select name='medic[]'> " +
                        "<option selected disabled hidden>Choisir un médicament</option>";
                    for(var medoc of map.keys()) {
                        selectHTML += "<option value='" + medoc + "'>" + map.get(medoc) + "</option>";
                    }
                    selectHTML += "" +
                        "</select>" +
                        "</div></div>" +
                        "<div class='control has-icons-left ml-3 mb-3'> " +
                        "<span class='icon is-small is-left'> " +
                        "<span class='material-icons'>production_quantity_limits</span>" +
                        "</span> " +
                        "<input type='number' placeholder='Quantité(s)' id='qte' class='input' name='qte[]' max='100' min='1' required>" +
                        "</div>";
                    compteur = compteur + 1;
                    newDiv.innerHTML = selectHTML;
                    document.getElementById(divName).appendChild(newDiv);
                } else {
                }

            }

            function removeInput(){
/*                if (compteur > 0) {
                    var className = "counter-" + compteur.toString();
                    console.log('counter-' + compteur);
                    const elements = document.getElementsByClassName(className);
                    compteur = compteur - 1;
                    while (elements.length > 0) {
                        elements[0].parentNode.removeChild(elements[0]);
                    }
                } else {

                }*/
                location.reload();
            }

        </script>
    @endsection
