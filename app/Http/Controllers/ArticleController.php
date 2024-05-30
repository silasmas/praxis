<?php

namespace App\Http\Controllers;

use App\Models\activite;
use App\Models\article;
use App\Models\categorie;
use App\Models\enseignant;
use App\Models\temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs = enseignant::get();
        $categories = categorie::get();
        $temoignages = temoignage::get();
        $articles = article::get();
        $galeries = activite::with("categorie")->get();
        return view('pages.accueil', compact('profs', "categories", "galeries", "articles", "temoignages"));
    }
    public function about()
    {
        $profs = enseignant::get();
        $temoignages = temoignage::get();
        return view('pages.about', compact('profs', "temoignages"));
    }
    public function activites()
    {
        $activites = activite::with("categorie")->get();
        // dd($activites);
        $categories = categorie::get();
        return view('pages.activites', compact("categories", "activites"));
    }
    public function teacher()
    {
        $profs = enseignant::get();
        return view('pages.teacher', compact('profs'));
    }
    public function articles()
    {
        $articles = article::paginate(5);
        $categories = article::select('domaine')->distinct()->get();
        $categoriesCount = Article::select('domaine', DB::raw('count(*) as nbr'))
            ->groupBy('domaine')->get();

        return view('pages.articles', compact("articles", "categories", "categoriesCount"));
    }
    public function articlesBy($domaine)
    {
        $articles = article::where("domaine", $domaine)->paginate(5);
        $categories = article::select('domaine')->distinct()->get();
        $categoriesCount = Article::select('domaine', DB::raw('count(*) as nbr'))
            ->groupBy('domaine')->get();

        return view('pages.articles', compact("articles", "categories", "categoriesCount"));
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
        $articles = article::get();
        return view("admin.pages.dashboard", compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->message);
        $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'contenu' => ['required'],
            'couverture' => ['required'],
        ]);
        $file = $request->file('couverture');

        $img1 = $file == '' ? '' : 'article/' . time() . '.' . $file->getClientOriginalName();
        $file == '' ? '' : $file->move('storage/article', $img1);

        $rep = article::create([
            'titre' => $request->titre,
            'subtitle' => $request->subtitle,
            'contenu' => $request->contenu,
            'domaine' => $request->domaine,
            'couverture' => $img1,
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
        $article = article::find($id);
        // dd($article);
        if ($article) {
            return response()->json(['reponse' => true, 'msg' => "Article trouvé", 'data' => $article]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur."]);

        }
    }
    public function showArt($id)
    {
        $article = article::find($id);
        $articles = article::inRandomOrder()->limit(5)->get();
        $categories = article::select('domaine')->distinct()->get();
        $categoriesCount = Article::select('domaine', DB::raw('count(*) as nbr'))
            ->groupBy('domaine')->get();
        $avant = article::where('id', '<', $id)
            ->orderBy('id', 'desc')
            ->first();

        $apres = article::where('id', '>', $id)
            ->orderBy('id', 'asc')
            ->first();

        return view('pages.detailarticle', compact("article", "articles", "categories", "categoriesCount","avant","apres"));

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
    public function update(Request $request, article $article)
    {
        $article = article::find($request->id);
        $article->titre != $request->titre ? $article->titre = $request->titre : $article->titre;
        $article->subtitle != $request->subtitle ? $article->subtitle = $request->subtitle : $article->subtitle;
        $article->contenu != $request->contenu ? $article->contenu = $request->contenu : $article->contenu;
        $article->domaine != $request->domaine ? $article->domaine = $request->domaine : $article->domaine;

        $file = $request->file("couverture");
        //  dd($file);
        if ($file) {
            $img1 = $file == '' ? '' : 'article/' . time() . '.' . $file->getClientOriginalName();
            $file == '' ? '' : $file->move('storage/article', $img1);
            $article->couverture != $img1 ? $article->couverture = $img1 : $article->couverture;
        }
        // dd($article->articleil);
        $article->save();
        if ($article) {
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
        $article = article::where('id', $id)->delete();
        if ($article) {
            return response()->json(['reponse' => true, 'msg' => "Suppression réussie"]);
        } else {
            return response()->json(['reponse' => false, 'msg' => "Erreur d'enregistrement."]);

        }
    }
}
