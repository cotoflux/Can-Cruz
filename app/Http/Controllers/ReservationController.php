<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

public function __construct()
{
    $this->middleware('auth')->except(['create']);
}

    public function index()
    {
        $reservation = Reservation::all();
        
        return view('Reservation/reservation', ['reservation' => $reservation]);
    }

    public function create()
    {
        return view('Reservation.create');
    }


    public function store(Request $request)
    {
        Reservation::create($request->all()); 
        return redirect('reservation/create');
        }
  
    
    public function show(Reservation $id)
    {
        $reservation = Reservation::find($id);
        return view('Reservation/reservation', ['reservation' => $reservation]);
    
    }

    
    public function edit(Reservation $reservation)
    {
        return view('Reservation.edit', ['reservation' => $reservation]);
    }

  
    public function update(Request $request, Reservation $reservation)
    {
            $reservation->update($request->all());
            $reservation->setBreakfastNull($request->breakfast);
            $reservation->setLunchNull($request->lunch);
            $reservation->setDinnerNull($request->dinner);
            $reservation->validate($request->validated);
            return redirect('reservation');
       
    }

   
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect('reservation');
    }
}
