<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class AdminReservationController extends Controller
{
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
        
        return view("admin.reservation.edit", ['reservation'=>$reservation,]);
    }
    
}
