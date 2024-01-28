<?php

namespace App\Http\Controllers;


use App\Models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $heures = [
        // créneaux du midi
        '12:00:00' => '12:00',
        '12:30:00' => '12:30',
        '13:00:00' => '13:00',
        '13:30:00' => '13:30',

        // créneaux du soir

        '20:00:00' => '20:00',
        '20:30:00' => '20:30',
        '21:00:00' => '21:00',
        '21:30:00' => '21:30',
    ];

    public function home()
    {
        $actus = Actu::all();

        return view('home', [
            'actus' => $actus,
        ]);
    }

    public function menu()
    {
        $categories = Categorie::all();

        return view('menu', [
            // variables qui peuvent être utilisées dans le template
            'categories' => $categories,
        ]);


    }
    public function plat(int $id)
    {
        $plat = Plat::find($id);

        return view('plat', [
            'plat' => $plat,
        ]);
    }

    public function reservation()
    {
        return view('reservation', [
            'heures' => $this->heures
        ]);
    }


    public function reservationStore(Request $request)
    {
        $heures = implode(',', $this->heures);

        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couverts' => 'required|numeric|gte:1|lte:16',
            'heure' => "required|in:{$heures}",
            'jour' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required',
            'commentaires' => '',

        ]);

        dd($validated);
    }
}
