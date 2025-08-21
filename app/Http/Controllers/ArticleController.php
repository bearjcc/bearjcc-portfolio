<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::published()->latest('published_at')->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article): View
    {
        return view('articles.show', compact('article'));
    }
}
