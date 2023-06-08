<?php

namespace App\Jobs;

use App\Models\Call;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class DispatchResources implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $call;

    /**
     * Create a new job instance.
     */
    public function __construct(Call $call)
    {
        $this->call = $call;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $vehicles = $this->call->vehicles;

        $this->alertResources($vehicles);
    }

    private function alertResources($vehicles)
    {
        if($vehicles) {
            foreach($vehicles as $vehicle) {
                $vehicle->status = 'C';
                $vehicle->alarmed_at = now();
                $vehicle->save();

                DB::table('status_log')
                    ->insert([
                        'vehicle_id' => $vehicle->id,
                        'status' => 'C',
                        'created_at' => now(),
                    ]);
            }
        }
    }
}
