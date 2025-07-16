<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.contact', [
            'pageTitle' => 'Contact',
            'metaDescription' => 'Contactez KAYBIC AFRICA pour vos projets de paiement mobile. Support technique et commercial disponible.',
            'metaKeywords' => 'contact, support, KAYBIC AFRICA, assistance, paiement mobile'
        ]);
    }

    /**
     * Handle contact form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        // Validation pour le formulaire de consultation gratuite
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse e-mail valide.',
            'phone.required' => 'Le numéro de téléphone est obligatoire.',
            'company.required' => 'Le nom de l\'entreprise est obligatoire.',
            'industry.required' => 'Le secteur d\'activité est obligatoire.',
            'message.required' => 'Le message est obligatoire.',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Veuillez corriger les erreurs dans le formulaire.',
                    'errors' => $validator->errors()
                ], 422);
            }
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs ci-dessous.');
        }

        try {
            // Envoi direct par email vers christianmerari@easytransfert.ci
            Mail::to('christianmerari@easytransfert.ci')->send(new \App\Mail\ContactFormMail($request->all()));
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Votre demande de consultation a été envoyée avec succès. Nous vous contacterons dans les plus brefs délais.'
                ]);
            }
            
            return back()->with('success', 'Votre demande de consultation a été envoyée avec succès. Nous vous contacterons dans les plus brefs délais.');
        } catch (\Exception $e) {
            \Log::error('Erreur envoi formulaire contact: ' . $e->getMessage());
            
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous contacter directement.'
                ], 500);
            }
            
            return back()
                ->withInput()
                ->with('error', 'Une erreur s\'est produite lors de l\'envoi. Veuillez réessayer.');
        }
    }
}
