<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use App\Models\Offrir;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{

    public function index()
    {
        $title = "Liste des différents médicaments disponible ";

        $medicaments = Medicament::all();

        return view('about', [
            'medicaments' => $medicaments,
            'title' => $title
        ]);
    }

}
