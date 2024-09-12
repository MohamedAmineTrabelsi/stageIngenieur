<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\donnéesUser;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class user extends Controller
{
    public function users()
{
    $users = ModelsUser::where('role', '!=', 'admin')->get();

    return view('listeusers', compact('users'));
}

public function usersrespo()
{
    $users = ModelsUser::where('role', '=', 'Simple User')->get();

    return view('listusersrespo', compact('users'));
}

public function addUser(Request $request)
{
   
    
    $user = new ModelsUser();
    $user->nom = $request->input('nom');
    $user->prenom = $request->input('prenom');
    $user->email = $request->input('email');
    $password=Str::random(8);
    $user->password = Hash::make($password);
    $user->role = $request->input('role');
    if ($request->input('role') == 'Simple User') {
        $user->solde = $request->input('solde');
    } else {
        $user->solde = null;
    }

    
    $user->save();

    Mail::to($user->email)->send(new donnéesUser($user, $password));


    return redirect()->back()->with('success', 'Utilisateur ajouté avec succès');
}

public function delete($id){

    $user=ModelsUser::find($id);
    $user->delete();

    return redirect()->back()->with('success', 'Utilisateur supprimé avec succés !');;
  }

  public function edit($id)
  {
      $user = ModelsUser::find($id);
      return view('modifier-user', compact('user'));
  }

  public function updateUser(Request $request, $id)
  {
      

     
      $user = ModelsUser::find($id);

     
      $user->nom = $request->input('nom');
      $user->prenom = $request->input('prenom');
      $user->email = $request->input('email');

      if ($user->role == 'Simple User') {
          $user->solde = $request->input('solde');
      }
      $user->save();


      return redirect()->back()->with('success', 'Utilisateur modifié avec succès');
  }


    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|confirmed',
            
        ]);

        $user =ModelsUser::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'mot de passe actuel incorrecte.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success','mot de passe changé  avec succés');
    }

}
