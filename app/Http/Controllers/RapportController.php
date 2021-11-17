<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Medicament;
use App\Models\Offrir;
use App\Models\Rapport;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RapportController extends Controller
{

    /**
     *
     * Fonction récupérant (Rapports, médecins, offrirs) depuis la BDD | Déclaration des variables pour les utiliser dans la vue
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        // Déclaration de variables
        $title = "Liste des rapports";
        // Récupération de l'ID du Visiteur connecté
        $userID = Auth::id();


        // Récupération des rapports : (Selon l'id du visiteur)
        $rapports = Rapport::where('id_visiteur', $userID)
            ->orderBy('date', 'DESC')
            ->paginate(10);


        // On return la vue avec les variables associées (afin de les utiliser dans la vue) :
        // Sinon, on obtient une erreur comme : "variables non définies"
        return view('rapports.rapports', [
            'rapports' => $rapports,
            'title' => $title
        ]);
    }


    /**
     *
     * Fonction récupèrant (Tous les médecins/médicaments) depuis la BDD | déclaration des variables pour utilisation dans la vue
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        // Déclaration des variables
        $userConnected = Auth::id();
        $title = "Création d'un rapport";

        // Get les médecins qui appartiennent au visiteur
        // -> $medecins = Rapport::where('id_visiteur', $userConnected)->get();

        // Récupération de tous les médecins
        $medecins = Medecin::all();

        // Récupération des 6 motifs
        $motifs = Rapport::select('motif')->distinct()->paginate(6);

        // Récupération de tous les médicaments
        $medicaments = Medicament::all();


        // Liaison des variables avec la vue
        return view('rapports.create', [
            'medecins' => $medecins,
            'medicaments' => $medicaments,
            'title' => $title,
            'motifs' => $motifs
        ]);
    }

    /**
     *
     * - Règles de validation / on check si tout est complet / Insertion dans la BDD
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $allData = $request->all();
        $motifs = Rapport::select('motif')->distinct()->paginate(6);

        foreach ($motifs as $motif){
            $Motifs[] = $motif->motif;
        }


        // Règles de validation (ex : le champ date doit obligatoirement être une date, sinon on sauvegarde pas);
        $rules = [
            'date' => 'required|date',
            'motif' => ['required', Rule::in($Motifs),'min:3', 'max:255'],
            'bilan' => 'required|string|min:3|max:255',
            'medecin' => 'required|string',
            'medic' => 'array',
            'medic.*' => 'string',
            'qte' => 'array',
            'qte.*' => 'integer',
        ];

        // Messages en cas de non respect des règles de validation
        $rulesMsg = [
            'max' => 'Le nombre maximum de caractères pour ":attribute" ne doit pas excéder :max.',
            'min' => 'Le nombre minimum de caractères pour ":attribute" ne doit pas être inférieur à :min.',
            'date.required' => 'Le champ ":attribute" ne peut pas être vide.',
            'date.date' => 'Le champ ":attribute" est obligatoirement une date sous la forme "JJ-MM-AAAA" !',
            'motif.required' => 'Le champ ":attribute" ne peut pas être vide.',
            'bilan.required' => 'Le champ ":attribute" ne peut pas être vide.',
            'medecin.required' => 'Le champ ":attribute" ne peut pas être vide.',
            'medic.*.string' => 'Le champ ":attribute" est obligatoirement une chaîne de caractères et ne peut être vide.',
            'qte.*.integer' => 'Le champ ":attribute" est obligatoirement un nombre et ne peut être vide.',
        ];

        // Modification des noms des champs pour avoir des noms plus jolies
        $niceNames = [
            'motif' => 'Motif',
            'date' => 'Date',
            'bilan' => 'Bilan',
            'medecin' => 'Médecin',
            'medic' => 'Médicament',
            'qte' => 'Quantité',
        ];


        // Vérification si la date est au passé non au futur
        $dateCheck = Carbon::now()->startOfDay()->gte($request->input('date'));

        // Cette boucle permet d'éviter le nom de champ type "qte.0" ou "qte.1" et aussi d'indiquer quels erreurs correspond à quels champs
        if (!empty($data['qte'])){
            foreach ($data['qte'] as $key => $value){
                $niceNames["qte." . $key] = 'Quantité N°' . $key;
            }
        }

        // On vérifie si les règles sont respectées
        $validator = Validator::make($request->all(), $rules, $rulesMsg, $niceNames);

        // Si non : (on retourne en arrière et on affiche les erreurs
        if ($validator->fails()){
            return redirect()->back()->withInput($allData)->withErrors($validator);
        }
        else if ($validator->fails() || !$dateCheck && !empty($data['medic']) && (count($data['medic']) != count(array_unique($data['medic'])))){
            return redirect()->back()->withInput($allData)->withErrors($validator)->with('invalidDate', 'Date : il est nécessaire que ce celle-ci soit antérieure.')->with('medicBoth', 'Médicaments : Les médicaments ne peuvent pas être les même!');
        }
        else if ($validator->fails() || !empty($data['medic']) && count($data['medic']) != count(array_unique($data['medic']))){
            // Vérification qu'il n'y ai pas deux fois le même médicament
            return redirect()->back()->withInput($allData)->withErrors($validator)->with('medicBoth', 'Médicaments : Les médicaments ne peuvent pas être les même!');
        }
        else if ($validator->fails() || !$dateCheck){
            return redirect()->back()->withInput($allData)->withErrors($validator)->with('invalidDate', 'Date : il est nécessaire que ce celle-ci soit antérieure.');
        }
        else {
            // Si oui : on instancie un objet avec les valeurs qui ont été complétées
            try{
                // Instanciation d'un rapport
                $rapport = new Rapport;
                $rapport->date = $data['date'];
                $rapport->motif = $data['motif'];
                $rapport->bilan = $data['bilan'];
                $rapport->id_visiteur = Auth::id();
                $rapport->id_medecin = $data['medecin'];
                $rapport->save();

                // Instanciation de l'objet offrir | Vérification si le champ médicament/qte n'est pas vide

                if (!empty($request->input('medic'))){
                    foreach($request->input('medic') as $i => $medic)
                    {
                        $data = new Offrir();
                        $data->id_medicament = $medic;
                        $data->id_rapport = $rapport->id;
                        $data->quantite = $request->input('qte')[$i];
                        $data->save();
                    }
                }

                // Les deux objets ont bien été créés, on affiche un message comme quoi c'est bon!
                return redirect('rapports')->with('status',"Le rapport a bien été enregistré.");
            }
            catch(Exception $e){
                // Les objets n'ont pu être créés, on renvoie un message disant de recommencer
                return redirect('rapports')->with('failed',"Le rapport n'a pas pu être enregistré suite à une erreur, veuillez recommencer !");
            }
        }
    }

}
