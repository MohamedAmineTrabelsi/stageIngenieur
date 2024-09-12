<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
 
    public function handle()
    {
        $botman = app('botman');
    
        $botman->hears('{message}', function($botman, $message) {
            // Convert message to lowercase for case insensitive matching
            $lowercasedMessage = strtolower($message);
            
            // Define a regular expression pattern to match variations of the word "document"
            $documentPattern = '/\b(documents?|docs?)\b/i';
    
            if ($lowercasedMessage == 'hi' || $lowercasedMessage == 'bonjour') {
                $botman->reply("Bonjour! Comment puis-je vous aider aujourd'hui?<br>Pour des informations sur notre assurance, tapez 1.<br>Pour savoir comment demander une couverture, tapez 2.<br>Pour savoir comment activer l'authentification à deux facteurs, tapez 3.");
            } elseif ($lowercasedMessage == '1') {
                $botman->reply("Notre assurance s'appelle Star.<br>Elle couvre les aspects suivants :<br> - Santé<br> - Vie<br> - Invalidité<br> - Accidents<br> - Voyage<br>Pour plus de détails, visitez votre profil.");
            } elseif ($lowercasedMessage == '2') {
                $botman->reply("Pour demander une couverture d'assurance, suivez ces étapes :<br>1. Créez un dossier sur la situation ou l'élément que l'assurance doit couvrir.<br>2. Déposez ce dossier dans l'application.<br>3. Le responsable de l'assurance chez 1WayDev examinera votre demande.");
            } elseif ($lowercasedMessage == '3') {
                $botman->reply("Pour activer l'authentification à deux facteurs (2FA) dans votre profil, suivez ces étapes :<br>1. Connectez-vous à votre compte.<br>2. Accédez à la section 'Profile'.<br>3. Recherchez l'option 'Authentification à Deux Facteurs'.<br>4. Suivez les instructions à l'écran pour configurer 2FA.<br>Cette option ajoute une couche de sécurité supplémentaire pour protéger votre compte.");
            } elseif (preg_match($documentPattern, $lowercasedMessage)) {
                $botman->reply("Pour demander une assurance, vous devez déposer les documents suivants :<br>1. Formulaire de demande rempli.<br>2. Copie de votre carte d'identité.<br>3. Preuve de domicile.<br>4. Rapport médical (si nécessaire).<br>5. Tout autre document pertinent à votre demande.");
            } elseif ($lowercasedMessage == 'merci') {
                $botman->reply("De rien! Si vous avez d'autres questions, n'hésitez pas à demander.");
            } else {
                $botman->reply("Désolé, je n'ai pas compris votre demande. Pour des informations sur notre assurance Star, tapez 1. Pour savoir comment demander une couverture, tapez 2. Pour activer l'authentification à deux facteurs, tapez 3.");
            }
        });
    
        $botman->listen();
    }
    
    
    

    
}