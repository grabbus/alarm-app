<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Models\CallHistory;
use App\Models\CallKeyword;
use App\Models\StatusHistory;
use App\Models\Vehicle;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class ControlCenterController extends Controller
{
    public function show(Call $call)
    {
        return view('control-center.show', [
            'call' => $call,
        ]);
    }

    public function index()
    {
        return view('control-center.index', [
            'calls' => Call::withoutTrashed()->get(),
            'vehicles' => Vehicle::all(),
            'closedCalls' => Call::onlyTrashed()->get(),
            'statusLogs' => StatusHistory::query()->simplePaginate(5),
        ]);
    }

    public function create()
    {
        $vehicles = Vehicle::all();
        $callKeywords = CallKeyword::all()->sortBy('keyword');

        return view('control-center.create', [
            'vehicles' => $vehicles,
            'keywords' => $callKeywords,
        ]);
    }

    public function delete(Call $call)
    {
        $call->delete();

        return redirect()->to('/leitstelle');
    }

    public function setAllToStatusTwo()
    {
        $vehicles = Vehicle::all();
        foreach($vehicles as $vehicle) {
            $vehicle->status = '2';
            $vehicle->alarmed_at = null;
            $vehicle->save();
        }

        return redirect()->to('/leitstelle');
    }

    public function resetSystem()
    {
        $vehicles = Vehicle::all();
        if ($vehicles) {
            foreach ($vehicles as $vehicle) {
                $vehicle->status = 2;
                $vehicle->alarmed_at = null;
                $vehicle->updated_at = null;
                $vehicle->save();
            }
        }

        StatusHistory::query()
            ->truncate();

        CallHistory::query()
            ->truncate();

        DB::table('calls_vehicles')
            ->truncate();

        $calls = Call::withTrashed()->get();
        if ($calls) {
            foreach ($calls as $call) {
                $call->forceDelete();
            }
        }

        return redirect()->to('/leitstelle');
    }

    public function createDispatch($id)
    {
        $call = Call::query()
            ->find($id);

        $date = date('d_m_Y');
        $time = date('H_i');

        $vehicles = $call->vehicles()
            ->get()
            ->toArray();

        $data = [
            'call_id' => $call->id,
            'date' => $date,
            'time' => $time,
            'caller' => $call->caller,
            'caller_phone_number' => $call->caller_phone_number,
            'street' => $call->street,
            'house_number' => $call->house_number,
            'city' => $call->city,
            'zip' => $call->zip,
            'object' => $call->object ?? '-',
            'section' => $call->section ?? '-',
            'keyword' => $call->keyword,
            'category' => $call->category,
            'catchword' => $call->catchword,
            'priority' => $call->priority,
            'resources' => '',
            'note' => $call->note,
            'vehicles' => $vehicles,
        ];

        $dispatch = PDF::loadView('pdf.dispatch', ['data' => $data]);
        return $dispatch->download($date . '_' . $time . '_Alarmfax_' . $call->keyword . '_' . '.pdf');
    }
}
