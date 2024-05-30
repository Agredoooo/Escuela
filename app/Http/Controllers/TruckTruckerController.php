<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Trucker;

use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    
    public function asociado(){

        $trucks = Truck::all();
        $truckers = Trucker::all();
       
        return view('truck_trucker.asociado',compact('trucks','truckers'));

    }

    public function store(Request $request){

        $trucks=Truck::find($request->truck_id);
        $trucks->truckers()->attach($request->trucker_id);

        
        return "El rol se asocio correctamente";

    }
}
