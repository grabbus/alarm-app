<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class MonitorController extends Controller
{
    public function index()
    {
        $vehiclesFD = Vehicle::query()
            ->where('organization', 'FW')
            ->get();

        $vehiclesEMS = Vehicle::query()
            ->where('organization', 'RD')
            ->get();

        return view('monitor', [
            'vehiclesFD' => $vehiclesFD,
            'vehiclesEMS' => $vehiclesEMS,
        ]);
    }
}
