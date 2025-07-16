<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the services overview page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.services', [
            'pageTitle' => 'Nos Services',
            'metaDescription' => 'Découvrez nos solutions complètes de paiement mobile : API PayIN, PayOUT, transferts et QR Pay.',
            'metaKeywords' => 'services, API PayIN, API PayOUT, transferts, QR Pay, Mobile Money'
        ]);
    }

    /**
     * Display the API PayIN page.
     *
     * @return \Illuminate\View\View
     */
    public function apiPayin()
    {
        return view('pages.services.api-payin', [
            'title' => 'API PayIN - Encaissement Mobile Money | KAYBIC AFRICA',
            'description' => 'API d\'encaissement multi-opérateurs pour collecter les paiements Mobile Money en Afrique de l\'Ouest. Intégration unique pour tous les portefeuilles.'
        ]);
    }

    /**
     * Display the API PayOUT page.
     *
     * @return \Illuminate\View\View
     */
    public function apiPayout()
    {
        return view('pages.services.api-payout', [
            'title' => 'API PayOUT - Décaissement Mobile Money | KAYBIC AFRICA',
            'description' => 'API de décaissement multi-opérateurs pour automatiser les paiements vers les portefeuilles Mobile Money en Afrique de l\'Ouest. Intégration unique pour tous les opérateurs.'
        ]);
    }

    /**
     * Display the API Transfert page.
     *
     * @return \Illuminate\View\View
     */
    public function apiTransfert()
    {
        return view('pages.services.api-transfert', [
            'title' => 'API Transfert International | KAYBIC AFRICA',
            'description' => 'Solutions de transfert d\'argent rapides et sécurisées dans toute la sous-région africaine avec KAYBIC Transfert International.'
        ]);
    }

    /**
     * Display the QR Pay page.
     *
     * @return \Illuminate\View\View
     */
    public function qrPay()
    {
        return view('pages.services.qr-pay', [
            'title' => 'QR PAY KAYBIC | KAYBIC AFRICA',
            'description' => 'Solution de paiement par QR Code sécurisée et instantanée pour commerçants et consommateurs avec KAYBIC QR PAY.'
        ]);
    }

    
    /**
     * Display the process integration support page.
     *
     * @return \Illuminate\View\View
     */
    public function integrationSupport()
    {
        return view('pages.process.integration-support', [
            'title' => 'Processus d\'Intégration et Support | KAYBIC AFRICA',
            'description' => 'Guide complet du processus d\'intégration de nos API et support technique pour l\'implémentation de vos solutions de paiement mobile.'
        ]);
    }

    /**
     * API Endpoint for PayIN service.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiPayinEndpoint(Request $request)
    {
        // Logique de traitement API PayIN
        return response()->json([
            'status' => 'success',
            'message' => 'PayIN request processed',
            'transaction_id' => 'TXN_' . time(),
            'timestamp' => now()
        ]);
    }

    /**
     * API Endpoint for PayOUT service.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiPayoutEndpoint(Request $request)
    {
        // Logique de traitement API PayOUT
        return response()->json([
            'status' => 'success',
            'message' => 'PayOUT request processed',
            'transaction_id' => 'TXN_' . time(),
            'timestamp' => now()
        ]);
    }

    /**
     * API Endpoint for Transfer service.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiTransfertEndpoint(Request $request)
    {
        // Logique de traitement transfert
        return response()->json([
            'status' => 'success',
            'message' => 'Transfer request processed',
            'transaction_id' => 'TXN_' . time(),
            'timestamp' => now()
        ]);
    }

    /**
     * API Endpoint for QR Pay service.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiQrPayEndpoint(Request $request)
    {
        // Logique de traitement QR Pay
        return response()->json([
            'status' => 'success',
            'message' => 'QR Pay request processed',
            'transaction_id' => 'TXN_' . time(),
            'timestamp' => now()
        ]);
    }
}
