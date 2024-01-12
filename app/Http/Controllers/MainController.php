<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $articles = Article::all();
        dd($articles);
        return view('home');
    }

    public function menu()
    {
        $categories = ['Petit déjeuner', 'Entrées', 'Plats', 'Desserts', 'Boissons'];

        return view('menu', [
            // variables qui peuvent être utilisées dans le template
            'categories' => $categories,
        ]);
    }
}
