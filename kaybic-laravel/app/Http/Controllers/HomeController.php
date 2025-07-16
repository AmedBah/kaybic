<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.home', [
            'pageTitle' => 'Accueil',
            'metaDescription' => 'Plateforme d\'agrégation Mobile Money leader en Afrique de l\'Ouest. Une API unifiée pour tous les opérateurs Mobile Money.',
            'metaKeywords' => 'Mobile Money, API paiement, Orange Money, MTN Mobile Money, Moov Money, Wave, CEDEAO'
        ]);
    }
}
