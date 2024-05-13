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
        $pros = enseignant::get();
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
    public function update(UpdateenseignantRequest $request, enseignant $enseignant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(enseignant $enseignant)
    {
        //
    }
}
