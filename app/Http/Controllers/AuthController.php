<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    /**
     *
     * Fonction qui retourne la page d'accueil
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $title = "Accueil";

        return view('auth.login', [
            'title' => $title
        ]);
    }


    /**
     *
     * Fonction permettant la connexion au site
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function customLogin(Request $request)
    {
        // Règles de validation
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('login', 'password');

        // Si les champs entrés existent bel et bien dans la base de données, on connecte l'utilisateur
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->with('successLogin', 'Connexion réussie !');
        }

        // Les informations entrées sont incorrectes, on redirige sur la page d'accueil et il doit réessayer la connexion
        return redirect("/")->with('loginFailed', 'Les informations de connexion que vous avez entrées sont incorrectes.');
    }


    /**
     *
     * Fonction permettant de :
     * - Vérifier si l'utilisateur est connecté, si oui : on affiche son profil || si non : on redirige vers la page d'accueil
     *
     * @return Application|Factory|View|RedirectResponse|Redirector
     */
    public function dashboard()
    {
        $title = "Profil";

        // Vérification si un utilisateur est connecté
        if(Auth::check()){
            return view('dashboard', [
                'title' => $title,
            ]);
        }

        // Utilisateur pas connecté, on renvoi sur la page de connexion
        return Redirect('/')->with('noAccess', 'Vous n\'avez pas accès à ce contenu.');
    }


    /**
     *
     * Fonction permettant la déconnexion
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function signOut() {
        Session::flush();
        Auth::logout();

        // Quand la déconnexion est faite, on redirige vers la page de connexion
        return Redirect('/');
    }
}
