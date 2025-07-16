<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function privacyPolicy()
    {
        return view('pages.legal.privacy-policy', [
            'title' => 'Politique de Confidentialité | Kaybic Africa',
            'description' => 'Politique de confidentialité de Kaybic Africa - Agrégateur de services numériques en Côte d\'Ivoire'
        ]);
    }

    public function legalMentions()
    {
        return view('pages.legal.legal-mentions', [
            'title' => 'Mentions Légales | Kaybic Africa',
            'description' => 'Mentions légales de Kaybic Africa - Agrégateur de solutions de paiement mobile en Côte d\'Ivoire et en Afrique de l\'Ouest'
        ]);
    }

    public function dataProtection()
    {
        return view('pages.legal.data-protection', [
            'title' => 'Politique de Protection des Données Personnelles | Kaybic Africa',
            'description' => 'Politique de protection des données personnelles de Kaybic Africa - Agrégateur de paiement mobile en Côte d\'Ivoire et en Afrique de l\'Ouest'
        ]);
    }
}
