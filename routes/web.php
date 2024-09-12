<?php


use App\Http\Controllers\BotManController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DossierController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TwoFactorAuthController;
use App\Http\Controllers\user;


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

Route::get('/', function () {
    return view('front.home');
});

Route::get('/acceuil', function () {
    return view('front/home');
});
Route::get('/contact', function () {
    return view('front.contactfront');
});
Route::post('addcontact', [ContactController::class, 'addContact']);


Route::middleware(['auth'])->group(function () {

  
    Route::get('/listeUsers', [user::class, 'users']);
    Route::get('/listeUsersrespo', [user::class, 'usersrespo']);

    Route::post('/ajouterUser', [user::class, 'addUser']);
    Route::get('/modifier-user/{id}', [user::class, 'edit']);
    Route::post('/update-user/{id}', [user::class, 'updateUser']);

    Route::post('changepassword', [user::class, 'changepassword']);

    
    Route::get('deleteuser/{id}', [user::class, 'delete']);
   
    Route::get('/contacts', [ContactController::class, 'list']);
    Route::get('/detailscontact/{id}', [ContactController::class, 'details']);
    Route::get('/deletecontact/{id}', [ContactController::class, 'delete']);

    Route::post('/ajouterDossier', [DossierController::class, 'ajouter']);
   

    Route::get('/modifier-dossier/{id}', [DossierController::class, 'edit']);
    Route::post('/update-dossier/{id}', [DossierController::class, 'update']);

    Route::get('deletedossier/{id}', [DossierController::class, 'delete']);
    Route::get('valider/{id}', [DossierController::class, 'valider']);
    Route::get('refuser/{id}', [DossierController::class, 'refuser']);
    Route::post('/demander-documents',[DossierController::class, 'demander']);


   
});
Auth::routes();

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [TwoFactorAuthController::class, 'showSetupForm'])->name('2fa.setup');
Route::post('/2fa/setup', [TwoFactorAuthController::class, 'setup']);
Route::post('/2fa/desactiver', [TwoFactorAuthController::class, 'desactiver']);

Route::get('/2fa/verify', [TwoFactorAuthController::class, 'showVerifyForm'])->name('2fa.verify');
Route::post('/2fa/verify', [TwoFactorAuthController::class, 'verify']);





 Route::group(['middleware' => ['auth', '2fa']], function () {
    Route::get('/listeUsers', [user::class, 'users']);
    Route::get('/dossier', [DossierController::class, 'list']);
    Route::get('/mes-dossier', [DossierController::class, 'listunique']);

    Route::get('/dashboard/statistiques', [DossierController::class, 'statistiques'])->name('dashboard.statistiques');


});