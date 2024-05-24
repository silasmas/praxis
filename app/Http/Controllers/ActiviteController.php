<?php

namespace App\Http\Controllers;

use App\Models\activite;
use App\Models\article;
use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categorie::get();
        $galeries = activite::get();
        foreach ($galeries as $image) {
            $path1 = public_path('storage/' . $image->img1);
            $path2 = public_path('storage/' . $image->img2);
            $path3 = public_path('storage/' . $image->img3);
            $path4 = public_path('storage/' . $image->img4);
            $path5 = public_path('storage/' . $image->img5);

            if (File::exists($path1)) {
                $imageSize = File::size($path1);
                // $image->path1 = round($imageSize / 1024, 2);
                $image->path1 = round($imageSize / (1024 * 1024), 2);
            } else {
                $image->path1 = 0;
                // $image->sizeInMB = 0;
            }
            if (File::exists($path2)) {
                $imageSize = File::size($path2);
                // $image->img2 = round($imageSize / 1024, 2);
                $image->path2 = round($imageSize / (1024 * 1024), 2);
            } else {
                $image->path2 = 0;
                // $image->sizeInMB = 0;
            }
            if (File::exists($path3)) {
                $imageSize = File::size($path3);
                // $image->path3 = round($imageSize / 1024, 2);
                $image->path3 = round($imageSize / (1024 * 1024), 2);
            } else {
                $image->path3 = 0;
                // $image->sizeInMB = 0;
            }
            if (File::exists($path4)) {
                $imageSize = File::size($path4);
                // $image->path4 = round($imageSize / 1024, 2);
                $image->path4 = round($imageSize / (1024 * 1024), 2);
            } else {
                $image->path4 = 0;
                // $image->sizeInMB = 0;
            }
            if (File::exists($path5)) {
                $imageSize = File::size($path5);
                // $image->path5 = round($imageSize / 1024, 2);
                $image->path5 = round($imageSize / (1024 * 1024), 2);
            } else {
                $image->path5 = 0;
                // $image->sizeInMB = 0;
            }
        }

        return view("admin.pages.dashboard", compact('categories', 'galeries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = article::get();
        return view("admin.pages.dashboard", compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'date'],
            'categorie' => ['required', 'string'],
            'img1' => ['required'],
        ]);
        $file = $request->file('img1');
        // $file2 = $request->file('img2');
        // $file3 = $request->file('img3');
        // $file4 = $request->file('img4');
        // $file5 = $request->file('img5');

        $img1 = $file == '' ? '' : 'galerie/' . time() . '.' . $file->getClientOriginalName();
        $file == '' ? '' : $file->move('storage/galerie', $img1);
        // $img2 = $file2 == '' ? '' : 'galerie/' . time() . '.' . $file2->getClientOriginalName();
        // $file2 == '' ? '' : $file2->move('storage/galerie', $img2);
        // $img3 = $file3 == '' ? '' : 'galerie/' . time() . '.' . $file3->getClientOriginalName();
        // $file3 == '' ? '' : $file3->move('storage/galerie', $img3);
        // $img4 = $file4 == '' ? '' : 'galerie/' . time() . '.' . $file4->getClientOriginalName();
        // $file4 == '' ? '' : $file4->move('storage/galerie', $img4);
        // $img5 = $file5 == '' ? '' : 'galerie/' . time() . '.' . $file5->getClientOriginalName();
        // $file5 == '' ? '' : $file5->move('storage/galerie', $img5);

        $rep = activite::create([
            'titre' => $request->titre,
            'date' => $request->date,
            'categorie_id' => $request->categorie,
            'description' => $request->description,
            'img1' => $img1,
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
        $cat = activite::find($id);
        // dd($cat->message);
        if ($cat) {
            return response()->json(['reponse' => true, 'msg' => "Galerie trouvée", 'data' => $cat]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur."]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(activite $activite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $categorie = activite::find($request->id);
        $categorie->titre != $request->titre ? $categorie->titre = $request->titre : $categorie->titre;
        $categorie->date != $request->date ? $categorie->date = $request->date : $categorie->date;
        $categorie->categorie_id != $request->categorie ? $categorie->categorie_id = $request->categorie : $categorie->categorie_id;
        $categorie->description != $request->description ? $categorie->description = $request->description : $categorie->description;

        $file = $request->file("img1");
        // dd($file);
        if ($file) {
            $img1 = $file == '' ? '' : 'galerie/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/galerie', $img1);
            $categorie->img1 != $img1 ? $categorie->img1 = $img1 : $categorie->img1;
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
        $parts = explode("$", $id, 3);
        // dd($parts[0]);
        // $categorie = activite::where('id', $parts[0])->update([$parts[1] => null]);
        $categorie = Activite::where('id', $parts[0])->delete();

        if ($categorie) {
            return response()->json(['reponse' => true, 'msg' => "Suppression réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
}
