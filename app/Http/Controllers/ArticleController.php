<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorearticleRequest;
use App\Http\Requests\UpdatearticleRequest;
use App\Models\article;
use App\Models\enseignant;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs = enseignant::get();
        return view('pages.accueil', compact('profs'));
    }
    public function about()
    {
        $profs = enseignant::get();
        return view('pages.about', compact('profs'));
    }
    public function activites()
    {
        return view('pages.activites');
    }
    public function teacher()
    {
        $profs = enseignant::get();
        return view('pages.teacher', compact('profs'));
    }
    public function articles()
    {
        return view('pages.articles');
    }
    public function contact()
    {
        return view('pages.contact');
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
    public function store(StorearticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatearticleRequest $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        //
    }
}
