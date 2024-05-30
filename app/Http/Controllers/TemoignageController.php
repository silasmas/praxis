<?php

namespace App\Http\Controllers;

use App\Models\temoignage;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temoignages = temoignage::get();
        return view('admin.pages.dashboard', compact('temoignages'));
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
        // dd($request->message);
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'message' => ['required'],
        ]);
        $file = $request->file('photo');

        $img1 = $file == '' ? '' : 'temoignage/' . time() . '.' . $file->getClientOriginalName();
        $file == '' ? '' : $file->move('storage/temoignage', $img1);

        $rep = temoignage::create([
            'nom' => $request->nom,
            'profession' => $request->profession,
            'message' => $request->message,
            'photo' => $img1,
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
        $cat = temoignage::find($id);
        // dd($cat->message);
        if ($cat) {
            return response()->json(['reponse' => true, 'msg' => "Temoignage trouvé", 'data' => $cat]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur."]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(temoignage $temoignage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, temoignage $temoignage)
    {
        $categorie = temoignage::find($request->id);
        $categorie->nom != $request->nom ? $categorie->nom = $request->nom : $categorie->nom;
        $categorie->profession != $request->profession ? $categorie->profession = $request->profession : $categorie->profession;
        $categorie->message != $request->message ? $categorie->message = $request->message : $categorie->message;

        $file = $request->file("photo");
        // dd($file);
        if ($file) {
            $img1 = $file == '' ? '' : 'temoignage/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/temoignage', $img1);
            $categorie->photo != $img1 ? $categorie->photo = $img1 : $categorie->photo;
        }
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
        $temoignage = temoignage::where('id', $id)->delete();
        if ($temoignage) {
            return response()->json(['reponse' => true, 'msg' => "Suppression réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
}
