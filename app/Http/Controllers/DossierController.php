<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class DossierController extends Controller
{
    public function ajouter(Request $request)
    {
        
$user=User::where("id",$request->user_id)->first();
 if( $user->solde < $request->montant){

 return redirect()->back()->with('error', 'Le montant dépasse le solde disponible pour cet utilisateur');
}
 else{
        $dossier = new Dossier();
        $dossier->user_id = $request->user_id;
        $dossier->titre = $request->titre;
        $dossier->description = $request->description;
        $dossier->montant = $request->montant;
            $file = $request->file('document');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('documents'), $filename);
            $dossier->piece_jointe = $filename;
      

        $dossier->save();

        return redirect()->back()->with('success', 'Dossier ajouté avec succès');
    }
}
    public function list()
    {
        $dossiers = Dossier::all();
        return view('list_dossier', compact('dossiers'));
    }
    public function listunique()
    {
        $dossiers = Dossier::where("user_id",Auth::user()->id)->get();
       
        return view('mes_dossiers', compact('dossiers'));
    }

    public function edit($id)
    {
        $dossier = Dossier::find($id);
       
        return view('modifier_dossier', compact('dossier'));
    }

    public function update(Request $request, $id)
    {


        $dossier = Dossier::find($id);
        $dossier->titre = $request->titre;
        $dossier->description = $request->description;
        $dossier->montant= $request->montant;
        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('documents'), $filename);
            $dossier->piece_jointe = $filename;
        }

        $dossier->save();

        return redirect()->back()->with('success', 'Dossier mis à jour avec succès');
    }

    public function delete($id)
    {
        $dossier = Dossier::find($id);
        if ($dossier->document) {
            unlink(public_path('documents') . '/' . $dossier->document);
        }
        $dossier->delete();

        return redirect()->back()->with('success', 'Dossier supprimé avec succès');
    }

    public function valider($id)
    {
        $dossier = Dossier::find($id);
        $user=User::where("id","=",$dossier->user_id)->first();
        $user->solde=$user->solde - $dossier->montant ;
        $user->save();
        $dossier->etat="validé";
        $dossier->save();
       
        return redirect()->back()->with('success', 'Dossier mis à jour avec succès');
    }

    public function refuser($id)
    {
        $dossier = Dossier::find($id);
        $dossier->etat="refusé";
        $dossier->save();
        return redirect()->back()->with('success', 'Dossier mis à jour avec succès');
    }
    public function demander(Request $req)
    {
        $dossier = Dossier::where('id',$req->dossierId)->first();
        $dossier->etat="Le Responsable Assurance demande plus de documents. ( $req->commentaire ) ";
        $dossier->save();
        return redirect()->back()->with('success', 'Dossier mis à jour avec succès');
    }

    public function statistiques()
    {
        $valideCount = Dossier::where('etat', 'validé')->count();
        $refuseCount = Dossier::where('etat', 'refusé')->count();
        $demandeCount = Dossier::where('etat', 'like', 'Le Responsable Assurance demande plus de documents%')->count();
        $enCoursCount = Dossier::whereNotIn('etat', ['validé', 'refusé'])->where('etat', 'not like', 'Le Responsable Assurance demande plus de documents%')->count();
    
        return view('dashboard', compact('valideCount', 'refuseCount', 'demandeCount', 'enCoursCount'));
    }
    
    
    
}
