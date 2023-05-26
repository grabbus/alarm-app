<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class MonitorController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('monitor', [
            'vehicles' => $vehicles
        ]);
    }
}
