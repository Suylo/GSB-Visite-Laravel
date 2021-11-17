<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EditRapportsController extends Controller

{

    /**
     * Fonction de recherche permettant de récupérer les rapports selon une date donnée
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function search(Request $request)
    {
        $title = "Recherche d'un rapport";

        // Recherche de rapport selon l'id du visiteur (donc les rapports d'un seul visiteur (celui connecté)), et le champ date

        // Récupération de la date donnée
        $q = $request->input('q');

        // Récupération des rapports selon la date donné et l'id du visiteur connecté
        $rapports = Rapport::where('date', 'LIKE', $q . '%')->where('id_visiteur', Auth::id())->orderBy('date', 'DESC')->get();

        // On affiche les rapports dans la vue
        return view('rapports.search', [
            'rapports' => $rapports,
            'title' => $title
        ]);

    }


    /**
     *
     * Fonction retournant la vue de modification d'un rapport
     *
     * @param Request $request
     * @param $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function viewRapport(Request $request, $id)
    {

        $title = "Modification du rapport : " . $id;

        // Récupération des 6 motifs
        $motifs = Rapport::select('motif')->distinct()->paginate(6);

        // Récupèration du rapport selon l'ID entré et selon l'ID du visiteur
        $rapport = Rapport::where('id_visiteur', Auth::id())->where('id', $id)->get();

        // Vérification si l'ID du rapport est bien en relation avec le visiteur | Si non, on retourne en arrière
        // Cela permet ainsi d'éviter toutes modifications d'un rapport qui ne serait pas le rapport du visiteur connecté.
        if (sizeof($rapport)) {
            return view('rapports.edit', [
                'title' => $title,
                'rapports' => $rapport,
                'motifs' => $motifs
            ]);
        } else {
            return redirect()->back();
        }
    }

    /**
     *
     * Après soumission du formulaire de modification, exécution de cette fonction qui va permettre de mettre à jour dans la BDD
     *
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function updateRapport(Request $request, $id)
    {
        $motifs = Rapport::select('motif')->distinct()->paginate(6);

        foreach ($motifs as $motif){
            $Motifs[] = $motif->motif;
        }

        // Règles de validation
        $rules = [
            'motif' => ['required', Rule::in($Motifs),'min:1','max:100'],
            'bilan' => 'required|string|min:1|max:100',
        ];

        // Modification des messages de validation (Si on ne met rien, cela affiche les messages en anglais)
        $rulesMsg = [
            'max' => 'Le nombre maximum de caractères ne doit pas excéder :max',
            'min' => 'Le nombre minimum de caractères ne doit pas être inférieur à :min',
            'motif.required' => 'Le champ "motif" ne peut pas être vide !',
            'bilan.required' => 'Le champ "bilan" ne peut pas être vide !'
        ];

        // Vérification
        $validator = Validator::make($request->all(), $rules, $rulesMsg);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->with('rapportUpdateFailed', 'Les champs "motif" et "bilan" ne peuvent pas être vide ! Veuillez bien les remplir.')
                ->withErrors($validator);
        } else {
            // Mise à jour selon les informations qui ont été modifiées
            $data = $request->input();
            try {
                Rapport::where('id', $id)->update([
                    'motif' => $data['motif'],
                    'bilan' => $data['bilan'],
                ]);

                // La mise à jour a pu être effectuée, on retourne un message avec succès
                return redirect('/rapports/search')->with('rapportUpdateSuccess', "Le rapport a bien été modifié.");

            } catch (Exception $e) {

                // Impossibilité de mettre à jour dans la BDD, on retourne une erreur indiquant de réessayer.
                return redirect()->back()->with('rapportUpdateError', "Le rapport n'a pas pu être modifié, veuillez réessayer !");
            }
        }

    }


}
