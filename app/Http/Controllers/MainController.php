<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
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
