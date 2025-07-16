<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display the solutions page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.solutions', [
            'pageTitle' => 'Solutions',
            'metaDescription' => 'Découvrez nos solutions complètes pour tous vos besoins de paiement mobile en Afrique de l\'Ouest.',
            'metaKeywords' => 'solutions, paiement mobile, entreprises, particuliers, CEDEAO'
        ]);
    }
}
