<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
        public function home() {
            $articles = Article::orderBy('titre')->get();
            $article11 = Article::find(11);
           // $article11Images = $article11->images()->get();
    
            return view('home', [
                'articles' => $articles,
                'article11' => $article11,
               // 'article11Images' => $article11Images,
        ]);
    }

    public function menu() {
        $categories = Categories::all();
        
        return view('menu', [
            'categories' =>$categories,
    ]);
}
}
