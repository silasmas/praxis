<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'nom' => ['required', 'string', 'max:255','unique:'.categorie::class],
        // ]);
        $validator = Validator::make($request->all(), [
            'nom' => ['required', 'string', 'max:255', 'unique:categories'],
        ]);
        // dd($validator->fails());
        if ($validator->fails()) {
            return response()->json(['reponse' => false, 'msg' => "Erreur de validation", 'errors' => $validator->errors()->all()]);
        } else {
            $rep = categorie::create([
                'nom' => $request->nom,
                'description' => $request->description,
            ]);

            if ($rep) {
                return response()->json(['reponse' => true, 'msg' => "Enregistrement réussi"]);
            } else {
                return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cat = categorie::find($id);
        // dd($cat->message);
        if ($cat) {
            return response()->json(['reponse' => true, 'msg' => "Catégorie trouvée", 'data' => $cat]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur."]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->id);
        $categorie = categorie::find($request->id);
        $categorie->nom != $request->nom ? $categorie->nom = $request->nom : $categorie->nom;
        $categorie->description != $request->description ? $categorie->description = $request->description : $categorie->description;
        // dd($categorie->categorieil);
        $categorie->save();
        if ($categorie) {
            return response()->json(['reponse' => true, 'msg' => "Modification réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie = categorie::find($id);

        $categorie->delete();
        if ($categorie) {
            return response()->json(['reponse' => true, 'msg' => "Suppression réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
}
