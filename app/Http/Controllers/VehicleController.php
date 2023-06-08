<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', [
            'vehicle' => $vehicle,
        ]);
    }

    public function dme(Vehicle $vehicle)
    {
        return view('vehicles.dme', [
            'vehicle' => $vehicle,
        ]);
    }
}
