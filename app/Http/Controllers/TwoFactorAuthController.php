<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
use PragmaRX\Google2FAQRCode\Google2FA as Google2FAQRCode;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TwoFactorAuthController extends Controller
{
    public function showSetupForm()
    {
        $google2fa = new Google2FA();
        $google2faQrCode = new Google2FAQRCode();

        $secret = $google2fa->generateSecretKey();

        $QR_Image = $google2faQrCode->getQRCodeInline(
            "Assurance",
            Auth::user()->email,
            $secret
        );

        return view('profile', ['secret' => $secret, 'QR_Image' => $QR_Image]);
    }

    public function setup(Request $request)
    {
        $user = User::where("id",Auth::user()->id)->first();
        $user->google2fa_secret = $request->input('secret');
        $user->save();

        return redirect()->back();
    }

    public function showVerifyForm()
    {
        return view('2fa.verify');
    }

    public function verify(Request $request)
    {
        $google2fa = new Google2FA();
        $user = Auth::user();

        $valid = $google2fa->verifyKey($user->google2fa_secret, $request->input('one_time_password'));

        if ($valid) {
            $request->session()->put('2fa_verified', true);
            return redirect()->route('home');
        }

        return redirect()->route('2fa.verify')->withErrors(['Invalid 2FA code.']);
 
 
 
    }
     public function desactiver()
     {
        $user=User::where("id",Auth::user()->id)->first();

        $user->google2fa_secret=null;
        $user->save();
        return redirect()->back()->with('success', '2FA desactivé avec succés');

     }
}
