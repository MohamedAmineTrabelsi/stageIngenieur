<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function addContact(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email',
            'tel' => 'required|string',
            'message' => 'nullable|string',
        ]);
    
        // Create a new contact recor
        $contact = new contact();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->tel = $request->tel;
        $contact->message = $request->message;
        $contact->save();
    
        return redirect()->back()->with('success', 'Message envoyé avec succé!');
    }

    public function list(){

        $contacts = Contact::latest()->get();
        return view("mescontacts",compact("contacts"));

    }

    public function details($id){

        $contact=contact::where("id",$id)->first();
        $contact->read="1";
        $contact->save();
        return view("detailscontact",compact("contact"));

    }

    public function delete($id){

        $contact=contact::find($id);
       
        $contact->delete();
        return redirect()->back();

    }
}
