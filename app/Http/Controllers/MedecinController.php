<?php


namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Medecin;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class MedecinController extends Controller
{

    /**
     * Fonction permettant la recherche d'un médecin selon le début de son nom/prénom
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function search(Request $request){

        $title = "Recherche d'un médecin";

        // Récupération du texte du champ recherche
        $q = $request->input( 'q' );

        // Requête like si le champ correspond à un prénom/nom dans la BDD
        $medecins = Medecin::where('nom', 'LIKE', $q . '%')->orWhere('prenom', 'LIKE', $q . '%')->get();

        return view('medecins.search', [
            'query' => $q,
            'medecins' => $medecins,
            'title' => $title
        ]);

    }

    /**
     *
     * Fonction qui retourne la vue d'un profil d'un médecin selon son ID
     *
     * @param Request $request
     * @param $id
     * @return Application|Factory|View|RedirectResponse|Redirector
     */
    public function viewProfile(Request $request, $id){

        $title = "Profil du médecin #" . $id;
        $leMedecin = Medecin::where('id', $id)->get();

        /**
         * On regarde si la requête renvoie quelque chose dans la variable
         * Si cette dernière est vide/null, cela signifie qu'il n'y aucun médecin avec cet ID
         * On redirige donc vers la page de recherche.
        **/
        if(sizeof($leMedecin)){
            return view('medecins.profile', [
                'medecin' => $leMedecin,
                'title' => $title
            ]);
        } else {
            return redirect('/search');
        }
    }


    /**
     *
     * Fonction qui retourne les rapports d'un seul médecin (Selon l'id du médecin)
     *
     * @param Request $request
     * @param $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function viewMedecinRapport(Request $request, $id){

        $title = "Rapports du médecin #" . $id;
        $rapports = Rapport::where('id_medecin', $id)
            ->orderBy('date', 'DESC')
            ->get();
        $medecinID = $id;

        if (sizeof($rapports)){
            return view('medecins.rapports', [
                'rapports' => $rapports,
                'medecinID' => $medecinID,
                'title' => $title
            ]);
        } else {
            return redirect()->back();
        }
    }


    /**
     *
     * Fonction retournant la vue de modification d'un médecin
     * - Récupèration de toutes les informations du médecin avec son id
     *
     * @param Request $request
     * @param $id
     * @return Application|Factory|View|RedirectResponse|Redirector
     */
    public function viewUpdateProfile(Request $request, $id)
    {
        $title = "Modification du médecin #" . $id;
        $leMedecin = Medecin::where('id', $id)->get();

        /**
         * On vérifie si le médecin existe avec cet ID
         * @see MedecinController::viewProfile()
         */
        if(sizeof($leMedecin)){
            return view('medecins.edit', [
                'medecin' => $leMedecin,
                'title' => $title
            ]);
        } else {
            return redirect('/search');
        }
    }


    /**
     *
     * Fonction permettant la mise à jour d'un médecin
     *
     * @param Request $request
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function updateProfile(Request $request, $id)
    {
        // Règles de validation
        $rules = [
            'nom' => 'required|string|max:25',
            'prenom' => 'required|string|max:25',
            'adresse' => 'required|string|max:255',
            'departement' => 'required|digits_between:1,3',
            'tel' => 'required|regex:/(0)[0-9]{9}/|max:10',
        ];

        // Messages
        $rulesMsg = [
            'max' => 'Le nombre de caractères de :attribute ne peut pas excéder :max !',
            'nom.required' => 'Le champ "Nom" ne peut pas être vide !',
            'prenom.required' => 'Le champ "Prénom" ne peut pas être vide !',
            'adresse.required' => 'L\'adresse ne peut pas être vide !',
            'departement.required' => 'Le numéro du département est obligatoire',
            'departement.digits_between' => 'Le numéro de :attribute doit être compris entre 1 et 3',
            'tel.required' => 'Le numéro de téléphone est obligatoire !',
            'tel.regex' => 'Le format de téléphone est invalide'
        ];

        $nicesNames = [
          'nom' => 'Nom' ,
          'prenom' => 'Prénom',
          'adresse' => 'Adresse',
          'tel' => 'Téléphone',
            'departement' => 'Département'
        ];

        $validator = Validator::make($request->all(), $rules, $rulesMsg, $nicesNames);
        if ($validator->fails()) {
            return redirect()->back()
//                ->with('profileFailed', 'Tous les champs doivent obligatoirement être rempli (sauf spécialité) et ils ne doivent pas être vide !')
                ->withErrors($validator);
        } else {
            $data = $request->input();
            try {
                // Mise à jour de l'objet
                Medecin::where('id', $id)->update([
                    'nom' => $data['nom'],
                    'prenom' => $data['prenom'],
                    'adresse' => $data['adresse'],
                    'tel' => $data['tel'],
                    'departement' => $data['departement'],
                    'specialite_complementaire' => $data['speci'],
                ]);

                // L'objet a bien été modifié ! On redirige avec un message indiquant que le profil a bien été modifié !
                return redirect('profile/' . $id)->with('profileEdited', "Le profil a bien été modifié.");
            } catch (Exception $e) {

                // Pour une quelconque raison l'objet n'a pas pu être modifié
                return redirect('profile/' . $id)->with('failed', "Le profil n'a pas pu être enregistré suite à une erreur, veuillez recommencer !");
            }
        }
    }
}
