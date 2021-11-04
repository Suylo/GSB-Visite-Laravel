<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Medicament;
use App\Models\Offrir;
use App\Models\Rapport;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

        // Récupération de tous les médicaments
        $medicaments = Medicament::all();

        // Liaison des variables avec la vue
        return view('rapports.create', [
            'medecins' => $medecins,
            'medicaments' => $medicaments,
            'title' => $title
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
        // Règles de validation (ex : le champ date doit obligatoirement être une date, sinon on sauvegarde pas);
        $rules = [
            'date' => 'required|date',
            'motif' => 'required|string|min:3|max:255',
            'bilan' => 'required|string|min:3|max:255',
            'medecin' => 'required|string',
            'medic' => 'required|array',
            'medic.*' => 'string',
            'qte' => 'required|array',
            'qte.*' => 'integer',
        ];

        // Messages en cas de non respect des règles de validation
        $rulesMsg = [
            'max' => 'Le nombre maximum de caractères ne doit pas excéder :max',
            'min' => 'Le nombre minimum de caractères ne doit pas être inférieur à :min',
            'date.required' => 'Le champ "date" ne doit pas être vide.',
            'date.date' => 'Le champ "date" est obligatoirement une date sous la forme "JJ-MM-AAAA" !',
            'motif.required' => 'Le champ "motif" ne peut pas être vide.',
            'bilan.required' => 'Le champ "bilan" ne peut pas être vide.',
            'medecin.required' => 'Le champ "médecin" ne peut pas être vide.',
            'medic.required' => 'Le champ "médicament" ne peut pas être vide.',
            'qte.required' => 'Le champ "quantité" ne peut pas être vide.',
            'qte.*.integer' => 'Le champ "quantité" est obligatoirement un nombre.'
        ];

        // On vérifie si les règles sont respectées
        $validator = Validator::make($request->all(), $rules, $rulesMsg);

        // Si non : (on retourne en arrière et on affiche les erreurs
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // Si oui : on instancie un objet avec les valeurs qui ont été complétées
        else {
            $data = $request->input();
            try{
                // Instanciation d'un rapport
                $rapport = new Rapport;
                $rapport->date = $data['date'];
                $rapport->motif = $data['motif'];
                $rapport->bilan = $data['bilan'];
                $rapport->id_visiteur = Auth::id();
                $rapport->id_medecin = $data['medecin'];
                $rapport->save();

                // Instanciation de l'objet offrir
                foreach($request->input('medic') as $i => $medic)
                {
                    $data = new Offrir();
                    $data->id_medicament = $medic;
                    $data->id_rapport = $rapport->id;
                    $data->quantite = $request->input('qte')[$i];
                    $data->save();
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
