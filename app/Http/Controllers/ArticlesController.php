<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //pour afficher la page formulaire

    public function formulaire () {
        return view ("pages.formulaire");
    }

    // pour afficher tous les articles dans une page

    public function articles (Article $article) {
        $articles = Article::all();
        return view ("pages.articles")->with("articles", $articles);
    }

    // pour ajouter un article dans BDD

    public function formpost (Article $article , validateFormRequest $request) {
        Article::create([
            "titre" => $request->titre,
            "description" => $request->description
        ]);
        return redirect()->back()->with("success" , "L'article " . $request->titre . " a été bien enregistré");
    }

    // lien pour aller dans chaque single article

    public function open (Article $article) {  
        return view ("pages.single-blog")->with("article" , $article);
    }

    // modification single article

    public function editer (Article $article) {
        return view ("pages.editer")->with("article" , $article);
    }

    public function update (Article $article , validateFormRequest $request) {
        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->save();
        return redirect("/");
    }

    // suppression d'un article

    public function delete (Article $article) {
        $article->delete();
        return redirect("/");
    }
}
