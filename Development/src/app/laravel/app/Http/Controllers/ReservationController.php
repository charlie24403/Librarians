<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function menu()
    {
        $reservations = \App\Models\Reservation::all();
        return view('reservations.menu', ['reservations' => $reservations]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $query = Reservation::query();
        if ($request->isbn) {
        $query->where('isbn', $request->isbn);
        }
        if ($request->user_id) {
            $query->where('user_id', $request->user_id);
        }
        
        $reservations = Reservation::paginate(10);
        return view('reservations.index', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservations = \App\Models\Reservation::find($id);
        return view('reservations.show', ['reservations' => $reservations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservations = \App\Models\Reservation::find($id);
        $reservations->delete();
        return redirect(route('reservations.menu')); 
    }
    
    public function search()
    {
        $reservations = \App\Models\Reservation::all();
        return view('reservations.search', ['reservations' => $reservations]);
    }

}
