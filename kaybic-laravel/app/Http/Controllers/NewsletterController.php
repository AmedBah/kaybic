<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    /**
     * Subscribe to newsletter.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:newsletter_subscribers,email',
        ], [
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'Veuillez saisir un email valide.',
            'email.unique' => 'Cet email est déjà abonné à notre newsletter.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        try {
            // Ici vous pouvez ajouter la logique de sauvegarde en base de données
            // NewsletterSubscriber::create(['email' => $request->email]);
            
            // Pour l'instant, on log l'inscription
            \Log::info('Nouvelle inscription newsletter: ' . $request->email);

            return response()->json([
                'success' => true,
                'message' => 'Votre inscription à la newsletter a été confirmée avec succès !',
            ]);
        } catch (\Exception $e) {
            \Log::error('Erreur inscription newsletter: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Une erreur s\'est produite lors de l\'inscription. Veuillez réessayer.',
            ], 500);
        }
    }
}
