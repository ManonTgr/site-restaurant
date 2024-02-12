<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminReservationController extends Controller
{
    private $heures = [
        // créneaux du midi
        '12:00',
        '12:30',
        '13:00',
        '13:30',

        // créneaux du soir
        '20:00',
        '20:30',
        '21:00',
        '21:30',
    ];

    public function Index()
    {
        //Recuperer la liste des résa
        //affiche un template
    }
    
    public function Show(Request $request)
    {
        //recup la resa
        //affiche
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        
        return view("admin.reservation.edit", 
        ['reservation'=>$reservation,
        'heures'=>$this->heures,
        ]);
        
    }
    
}
