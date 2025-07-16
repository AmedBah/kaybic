<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\LegalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Pages principales
Route::get('/apropos', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/solutions', [SolutionController::class, 'index'])->name('solutions');
Route::get('/integration', [ServiceController::class, 'integrationSupport'])->name('integration');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Services spécifiques
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/api-payin', [ServiceController::class, 'apiPayin'])->name('api-payin');
    Route::get('/api-payout', [ServiceController::class, 'apiPayout'])->name('api-payout');
    Route::get('/api-transfert', [ServiceController::class, 'apiTransfert'])->name('api-transfert');
    Route::get('/qr-pay', [ServiceController::class, 'qrPay'])->name('qr-pay');
});

// Formulaires
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Pages légales
Route::get('/politique-confidentialite', [LegalController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/mentions-legales', [LegalController::class, 'legalMentions'])->name('legal-mentions');
Route::get('/protection-donnees-personnelles', [LegalController::class, 'dataProtection'])->name('data-protection');

// Pages processus
Route::get('/processus-integration-support', [ServiceController::class, 'integrationSupport'])->name('process.integration-support');

// API Routes (pour les applications externes)
Route::prefix('api')->middleware('api')->group(function () {
    // Routes API pour les services de paiement
    Route::post('/payin', [ServiceController::class, 'apiPayinEndpoint']);
    Route::post('/payout', [ServiceController::class, 'apiPayoutEndpoint']);
    Route::post('/transfert', [ServiceController::class, 'apiTransfertEndpoint']);
    Route::post('/qr-pay', [ServiceController::class, 'apiQrPayEndpoint']);
    
    // Route pour le statut de l'API
    Route::get('/status', function () {
        return response()->json([
            'status' => 'online',
            'timestamp' => now(),
            'version' => '1.0.0'
        ]);
    });
});

// Routes de redirection pour l'ancien système
/*
Route::get('/Accueil', function () {
    return redirect()->route('home', [], 301);
});

Route::get('/Apropos', function () {
    return redirect()->route('about', [], 301);
});

Route::get('/services', function () {
    return redirect()->route('services', [], 301);
});

Route::get('/solutions', function () {
    return redirect()->route('solutions', [], 301);
});

Route::get('/contact', function () {
    return redirect()->route('contact', [], 301);
});

Route::get('/service-api-payin', function () {
    return redirect()->route('services.api-payin', [], 301);
});

Route::get('/service-api-payout', function () {
    return redirect()->route('services.api-payout', [], 301);
});

Route::get('/service-api-transfert', function () {
    return redirect()->route('services.api-transfert', [], 301);
});

Route::get('/service-qr-pay', function () {
    return redirect()->route('services.qr-pay', [], 301);
});

Route::get('/process-integration-support', function () {
    return redirect()->route('process.integration-support', [], 301);
});

Route::get('/politique_confidentialité', function () {
    return redirect()->route('privacy-policy', [], 301);
});

Route::get('/Mentions légales', function () {
    return redirect()->route('legal-mentions', [], 301);
});

Route::get('/Politique-protection-données-personnelles(DCP)', function () {
    return redirect()->route('data-protection', [], 301);
});
*/