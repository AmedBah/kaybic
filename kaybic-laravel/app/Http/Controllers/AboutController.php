<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.about', [
            'pageTitle' => 'À propos',
            'metaDescription' => 'Découvrez KAYBIC AFRICA, votre partenaire de confiance pour les solutions de paiement mobile en Afrique de l\'Ouest.',
            'metaKeywords' => 'KAYBIC AFRICA, à propos, entreprise, Mobile Money, Afrique de l\'Ouest'
        ]);
    }
}
