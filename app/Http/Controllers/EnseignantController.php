<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateenseignantRequest;
use App\Models\contact;
use App\Models\enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs = enseignant::with("message")->get();
        // dd($profs);
        return view("admin.pages.dashboard", compact("profs"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeProf(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'titre' => ['required', 'string'],
            'biographie' => ['required', 'string', 'max:255'],
        ]);
        $file = $request->file('profil');

        $profil = $file == '' ? '' : 'team/' . time() . '.' . $file->getClientOriginalName();
        $file == '' ? '' : $file->move('storage/team', $profil);

        $rep = enseignant::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'titre' => $request->titre,
            'biographie' => $request->biographie,
            'profil' => $profil,
            'x' => $request->x,
            'insta' => $request->instagram,
            'fb' => $request->facebook,
        ]);

        if ($rep) {
            return response()->json(['reponse' => true, 'msg' => "Enregistrement réussi"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'message' => ['required', 'string'],
            'subject' => ['required', 'string', 'max:255'],
        ]);
        $rep = contact::create([
            'nom' => $request->email,
            'email' => $request->email,
            'phone' => $request->phone,
            'obje' => $request->subject,
            'message' => $request->message,
            'enseignant_id' => $request->enseignant_id,
        ]);

        if ($rep) {
            return response()->json(['reponse' => true, 'msg' => "Enregistrement réussi"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prof = enseignant::find($id);

        return view("pages.detailteach", compact('prof'));
    }
    public function show_msg($id)
    {
        $prof = enseignant::with("message")->find($id);
        // dd($prof->message);
        if ($prof) {
            return response()->json(['reponse' => true, 'msg' => "Enregistrement réussi",'data' => $prof]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
    public function show_admin($id)
    {
        $prof = enseignant::find($id);
        // dd($prof);
        if ($prof) {
            return response()->json(['reponse' => true, 'msg' => "Information trouvée, vous pouvez modifier", 'data' => $prof]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(enseignant $enseignant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request);
        // dd($request->file);
        $prof=enseignant::find($request->id);
        $file = $request->file('profil');
        $profile="";
        if($file!=null){
            $profile = $file == '' ? '' : 'team/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/team', $profile);
            // dd($profil);
        }


        $prof->nom!=$request->nom?$prof->nom=$request->nom:"";
        $prof->prenom!=$request->prenom?$prof->prenom=$request->prenom:"";
        $prof->titre!=$request->titre?$prof->titre=$request->titre:"";
        $prof->biographie!=$request->biographie?$prof->biographie=$request->biographie:"";
        $prof->x!=$request->youtube?$prof->x=$request->youtube:"";
        $prof->fb!=$request->facebook?$prof->fb=$request->facebook:"";
        $prof->insta!=$request->instagram?$prof->insta=$request->instagram:"";
        $prof->profile!=$profile?$prof->profil=$profile:"";
        // dd($prof->profil);
        $prof->save();
        if ($prof) {
            return response()->json(['reponse' => true, 'msg' => "Modification réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(enseignant $enseignant)
    {
        //
    }
}
